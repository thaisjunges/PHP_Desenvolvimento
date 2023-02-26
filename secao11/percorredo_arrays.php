<html>
    <head>
        <meta charset="utf-8" />
        <title>Loops foreach</title>
    </head>
<body>

        <?php

        //ARRAY ASSOCIATIVO
        $registros = array(
            //titulo -> ex : um nome de uma div
            array('titulo' => 'Título notícia 1', 'conteudo' => 'Conteúdo Título notícia 1'),
            array('titulo' => 'Título notícia 2', 'conteudo' => 'Conteúdo Título notícia 2'),
            array('titulo' => 'Título notícia 3', 'conteudo' => 'Conteúdo Título notícia 3'),
            array('titulo' => 'Título notícia 4', 'conteudo' => 'Conteúdo Título notícia 4')

        );
        
            echo '<pre>';
            print_r ($registros);
            echo '</pre>';

            //$idx = 0;

            //count -> manipula arrays conta a quantidade de elementos de array
            echo 'O array possui: ' . count($registros) . ' registros';
           
           /*
           //USO DO COUNT PARA CONTROLAR DE FORMA DINÂMICA QUANTAS INTERAÇÕES DEVERMOS TER PARA PERCORRER UM ARRAY
            
           while ($idx < 3) {

            // [titulo] -> ex : mostrando essa div na tela
            echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
            echo '<p>' . $registros[$idx]['conteudo'] . '</p>';
            echo '<hr/>';

            $idx++;
        }
        */


        /*
        // TESTE É FEITO NO FINAL
        
        do {

            echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
            echo '<p>' . $registros[$idx]['conteudo'] . '</p>';
            echo '<hr/>';

            $idx++;

            //VERFICAR SE IDX É MENOR QUE O TOTAL DE ELEMENTOS CONTIDOS DENTRO DO ELEMENTO
        } while ($idx < count($registros));
        */


        for ($idx = 0; $idx < count($registros); $idx++) { 
            echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
            echo '<p>' . $registros[$idx]['conteudo'] . '</p>';
           
            echo '<hr/>';
        }


        ?>
    </body>
</html>