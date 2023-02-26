<?php
  session_start();

  //CASO EXISTA O VALOR VAI SER TRUE  
  if (!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'SIM') {
    header('Location: index.php?Login=erro2');
  }

?>