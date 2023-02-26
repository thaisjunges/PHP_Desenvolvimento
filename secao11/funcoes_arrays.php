<html>
    <head>
        <meta charset="utf-8"/>
        <title>Curso PHP</title>
    </head>
    <body>

        <?php

        /*
        //IS_ARRAY - verifica se o parâmetro é um array

        $array = array('notebook','teclado');
        $retorno = is_array($array);

        if($retorno) {
            echo 'Sim, é um array';
        } else {
            echo 'Não, não é um array';
        }*/


        /*

        //ARRAY_KEYS - retorna todas as chaves de um array

        $array = [1 => 'a', 7 => 'b', 18 => 'c'];
        echo '<pre/>';
            print_r($array);
        echo '</pre';

        $chaves_array = array_keys($array);
        echo '<pre>';
            print_r($chaves_array);
        echo '</pre>';
        */


        /*
        //SORT - ordena um array e reajusta seus índices
        
        $array = array('teclado', 'mouse', 'cabo hdmi', 'gabinete', 'fonte atx', 'notebook');
        echo '<pre>';
        print_r($array);
        echo '</pre>';

        sort($array); //true ou false
        echo '<pre>';
        print_r($array);
        echo '</pre>';

        //ASORT - ordena um array preservando os índices

        asort($array); //true ou false
        echo '<pre>';
        print_r($array);
        echo '</pre>';
        */


        /*
        //COUNT - conta a quantidade de elementos de um array

        $array = array('teclado', 'mouse', 'cabo hdmi', 'gabinete', 'fonte atx', 'notebook');
        echo '<pre>';
        print_r($array);
        echo count($array);
        echo '</pre>';
        */


        /*
        // ARRAY_MERGE - funde um ou mais arrays

        $array1 = ['osx', 'windows'];
        $array2 = array('linux');
        $array3 = ['solaris'];

        $novo_array = array_merge($array1, $array2, $array3);
        echo '<pre>';
        print_r($novo_array);
        echo '</pre>';
        */


        /*
        //EXPLODE - divide uma string baseada em um delimitador

        $string = '08/01/2023';
        $array_retorno = explode('/', $string);
        echo '<pre>';
        echo $string;
        print_r($array_retorno);
        echo $array_retorno[2] . '-' . $array_retorno[1] . '-' . $array_retorno[0];
        echo '</pre>';
        */


        /*
        //IMPLODE - junta elementos de um array em uma string 
        
        $array = ['a', 'b', 'x', 'y']; //a,b,x,y
        $string_retorno = implode(',', $array);
        echo $string_retorno;
        
        */
        ?>
    </body>
</html>