<html>
    <head>
        <meta charset="utf-8" />
        <title>Desafio 346</title>
    </head>
<body>

        <?php
         #CRIE UM SCRIPT CAPAZ DE PRODUZIR, ATRAVÉS DE UM LAÇO DE REPETIÇÃO,
    #UM ARRAY COM 6 ELEMENTOS NUMÉRICOS ALEATÓRIOS ENTRE 1 E 60
    #SIMULANDO O FUNCIONAMENTO DO SORTEIO MEGA SENA
    #ATENTE-SE AO FATO QUE OS NÚMEROS CONTIDOS DENTRO DA ARRAY
    #NÃO PODEM SER REPETIDOS.
        $array_criado = array('1','30','3','4','26','56');

        echo '<pre>';
        print_r($array_criado);
        echo '</pre>';

        foreach($array_criado as $numeros) {
            print_r($numeros);
        }
       
        
        if ($numeros <= '1') {
            print_r($numeros);
        }
    ?>
    </body>
</html>