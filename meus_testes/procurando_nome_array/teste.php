<html>
    <head>
        <meta charset="utf-8"/>
        <title>Curso PHP</title>
    </head>
    <body>
       
    <?php

    $nome_digitado = $_POST['name'];

    $lista_coisas = ['Thais', 'inter campeao do mundo' ,'Ferreira', 'Ana'];

   $existe = in_array(($nome_digitado), $lista_coisas);
   
   if($existe){
    echo "{$nome_digitado} Conectado";
   } else {
    echo "Não conectado";
   }

    ?>
    </body>
</html>