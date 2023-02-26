<html>
    <head>
        <meta charset="utf-8" />
        <title>Loops foreach</title>
    </head>
<body>

        <?php

        $itens = array('sofá', 'mesa', 'cadeira', 'fogão', 'geladeira');

        echo '<pre>';
        print_r($itens);
        echo '</pre>';

        foreach ($itens as $item) { 
            echo "$item";

            if($item == 'mesa') {
                echo ' (*Compre uma mesa e ganhe 25% de desconto na compra de 4 cadeiras)';
            }

            echo '<br />';
        }
       ?>
    </body>
</html>