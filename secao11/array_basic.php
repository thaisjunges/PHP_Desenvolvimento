<html>
    <head>
        <meta charset="utf-8"/>
        <title>Curso PHP</title>
    </head>
    <body>

        <?php 

        //sequenciais (numéricos)
        //$lista_frutas = array('Banana', 'Maçã', 'Morango', 'Uva', 'Abacate');
       
        /* $lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva', 'Abacate'];
        $lista_frutas[] = 'Abacaxi';
        
        
        // pre - deixa o conteudo formatado
        echo '<pre>';
            var_dump($lista_frutas);
        echo '</pre>';
        echo '<hr/>';
            print_r($lista_frutas);
        echo '</pre>';
        
        echo $lista_frutas[4];
        */


        //associativos
        $lista_frutas = [
        'a' => 'Banana', 
        'b' => 'Maçã',
        'x' => 'Morango',
        'z' => 'Uva', 
        '2' => 'Abacate'];

        echo $lista_frutas['w'] = 'Abacaxi';

        echo '<pre>';
        var_dump($lista_frutas);
        echo '</pre>';

        echo $lista_frutas['2'];

        
        ?>
</body>
</html>