<?php 

//Sempre que trabalhar com SESSÃO é importante executar essa função para ter acesso á essa super global
session_start();

/*//Print de todas as sessões
echo '<pre>';
print_r($_SESSION);
echo '</pre>';

// remover índices do array de sessão
//unset()
unset($_SESSION['x']); //removendo um índice expecifico apenas se existir 

echo '<pre>';
print_r($_SESSION);
echo '</pre>';*/

/*//destruir a variável de sessão
//session_destroy()
session_destroy(); //será destruída mas somente na próxima requisição é que não teremos mais acesso

echo '<pre>';
print_r($_SESSION);
echo '</pre>';*/

//Forçar redirecionamento para página de login
session_destroy();
header('Location: index.php');

?>