<html>
    <head>
        <meta charset="utf-8"/>
        <title>Curso PHP</title>
    </head>
    <body>

        <?php 
        
        $nome = 'Thais';
        $idade = 24;
        $peso = 70.5;
        $fumante_sn = true; //(true = 1) ou (false = vazio)

        ?>

        <h1>Ficha Cadastral</h1>
        <br>
        <p>Nome: <?=$nome ?></p>
        <p>Idade: <?=$idade ?></p>
        <p>Peso: <?=$peso ?></p>
        <p>Fumante: <?=$fumante_sn ?></p>
</body>
</html>