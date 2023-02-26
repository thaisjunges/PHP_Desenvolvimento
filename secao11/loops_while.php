<html>
    <head>
        <meta charset="utf-8"/>
        <title>Curso PHP</title>
    </head>
    <body>

        <?php

        $num = 1;
        //operdores comparação / lógicos
        echo '-- Início do loop --<br/>';
        while($num < 10) {

        $num += 1; //critério de parada

        if($num == 2 || $num == 6) {
            continue;
        }

            echo "$num <br/>";

            /*
            if($num > 100) {
                 break;
            }
            */
        }
        
        echo '-- Fim do loop --';

        ?>
    </body>
</html>