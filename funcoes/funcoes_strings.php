<html>
    <head>
        <meta charset="utf-8" />
        <title>Funções Strings</title>
    </head>
    <body>
        
    <?php 
    
    $texto = 'Curso Completo de PHP';

    //string to lower
    echo $texto . '<br />';
    echo strtolower($texto);

    //string to upper
    echo $texto . '<br />';
    echo strtoupper($texto);

    echo '<hr />';
    //upper case first
    echo $texto . '<br />';
    echo ucfirst($texto);

    echo '<hr />';
    //string length
    echo $texto . '<br />';
    echo strlen($texto);

    echo '<hr />';
    //string replace
    echo $texto . '<br />';
    echo str_replace('PHP', 'JavaScript', $texto);
    //'Curso Completo de PHP'
    //0,1,2,3,4,5 ... 20
    echo substr($texto, 6,8);

?>
    </body>
</html>