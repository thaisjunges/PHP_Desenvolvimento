<html>
    <head>
        <meta charset="utf-8"/>
        <title>Funções</title>
</head>
<body>
    <?php 
    
    //void (função sem retorno)
    function exibirBoasVindas() {
        echo 'Bem-vindo ao curso de PHP!<br/>';
    }

    exibirBoasVindas();
    
    
    //return (função com retorno)
    function calcularAreaTerreno($largura, $comprimento) {
        $area = $largura * $comprimento;
        return $area;
    }
     
    $resultado = calcularAreaTerreno(5,25);
    echo $resultado;
    
    ?>
</body>
</html>