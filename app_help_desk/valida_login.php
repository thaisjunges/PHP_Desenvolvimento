<?php

    //colocar o start antes de qualquer echo 
    session_start();

    $_SESSION['x'] = 'Oi, sou um valor de sessão!';
    print_r($_SESSION);
    echo '<hr />';
    echo $_SESSION['y'] . '<br />';

    //variavel que verifica se a autenticação foi realizada
    $usuario_autenticado = false;

    //usuarios do sistema
    $usuarios_app = array(
        array('email' => 'adm@teste.com', 'senha' => '123456'),
        array('email' => 'user@teste.com', 'senha' => 'abcd')
    );

    /*echo '<pre>';
    print_r($usuarios_app);
    echo '</pre>';
    */

    //percorrendo cada elemento
    foreach ($usuarios_app as $user) {

    //se email é compativel com o form e se a senha tambem é 
    if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
        $usuario_autenticado = true;
        }
    }

    //se cair no true , isso na tela
    if ($usuario_autenticado) {
        echo 'Usuário autenticado';
        $_SESSION['autenticado'] = 'SIM';
        $_SESSION['x'] = 'um valor';
        $_SESSION['y'] = 'outro valor';
        header('Location: home.php');
    } else {
        $_SESSION['autenticado'] = 'Não';
        //definindo parâmetro
        header('Location: index.php?Login=erro');
    }



    /*print_r($_GET);

echo '<br/>';

    echo $_GET['email'];
echo '<br/>';
echo $_GET['senha'];*/

/*print_r($_POST);

echo '<br/>';

    echo $_POST['email'];
echo '<br/>';
//echo $_POST['senha'];*/
?>