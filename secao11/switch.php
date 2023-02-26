<html>
    <head>
    <meta charset='utf-8'/>
    <title>Switch</title>
    </head>
    <body>
        <?php 
        
        $parametro = true;

        switch($parametro) {
            case 1:
                echo 'Entrou no case 1';
                break;

            case 'abc':
                echo 'Entrou no case 2';
                break;

            case true:
                echo 'Entrou no case false';
                break;

            default:
                echo 'Entrou no default';
                break;
        }
        ?>
</body>
</html>