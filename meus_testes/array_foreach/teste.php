 
    <?php 

    $nome = $_POST["name"];

    $nomes = [
        'thais',
        'teste',
        'Ferreira'
    ];

    //for ($i=0; $i < count($nomes) ; $i++) 
    foreach ($nomes as $n)
    { 
         if ($n == $nome) {
            echo "Você {$nome}";
            return;
         } else {
            echo "Erro";
        return;
        } 
    }
    
    //$nome = $_POST["teste"];

           /*$nomes = [
            'thais',
            'ferreira'
           ];*/

        /*$nomes = [
        'Thais',
        'ferreira',
        "joao",
        "teste"
        ];*/

        //foreach ($nomes as $nome) 
        
        /*for ($i = 0; $i < count($nomes); $i++) {
            if ($i == $nome) {
                echo "Você {$nome} esta conectado";
                return;
            } else {
                echo "Tente novamente";
            }
        };*/
        
        /*{


            if (isset($nomes) == $nome_teste) {
                echo 'Você' .$nome_teste. 'esta conectado';
            } else {
                echo 'Tente novamente';
            }
        };*/

          

          /*
           echo $nome_teste;
           echo $nomes;
           */

        ?>
