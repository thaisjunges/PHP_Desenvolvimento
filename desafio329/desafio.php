<html>
    <head>
 <meta charset="utf-8"/>
    <title>Desafio 329</title>
    </head>
    <body>
        <form method="POST">

        <label for="teste">Digite seu salário: </label>
        <input type="teste" name="salario">
        <button type="submit">ENVIAR</button>
        </form>
    <?php 

    // CRIE UMA FUNÇÃO PARA CALCULAR O IMPOSTO DE RENDA A SER PAGO
    //COM BASE EM UM SALÁRIO PASSADO POR PARÂMETRO.

    //ATE 1.903,98  ISENTO
    // 1.903,99 ATÉ 2.826,65   7,5%
    //2.826,66 ATÉ 3.751,05    15%
    //3.751,06 ATÉ 4.664,68   22%
    // ACIMA DE 4.664,68     27,5%

   //SALÁRIO PARA COMPARAR
       /*$a = 1903.98; //isento
       $b = 2826.65; //7.5
       $c = 3751.05; //15
       $d = 4664.68; //22.5 
       $e = 4664.69; //27.5*/

       function calc_imposto($salario) {
       
       $a = 1903.98; //isento
       $b = 2826.65; //7.5%
       $c = 3751.05; //15%
       $d = 4664.68; //22.5% 
       $e = 4664.69; //27.5%
       $salario = $_POST["salario"];

            if ($salario <= $a) {
                echo 'Você esta ISENTO de imposto';
            } else if ($salario > $a && $salario < $b) {
                $resul = number_format($salario,2,".","." * (7.5));
                echo 'Seu salário é R$ ' . $salario;
                echo '<br>';
                echo 'Vai pagar de imposto R$ ' . $resul;
            } else if ($salario > $b && $salario < $c) {
                $resul = ($salario * (15));
                echo 'Seu salário é R$ ' . $salario;
                echo '<br>';
                echo 'Você vai pagar de imposto R$ ' . $resul . ' pois seu salário esta na faixa de R$' . $b . ' e R$' . $c;;
            } else {
                echo 'err';
            }
                return $salario;
            }

            'Seu salário é: ' . calc_imposto($salario);
            
        

       /*($_POST["salario"]) {
        echo ''
    }*/
    //CÁLCULO DAS PORCENTAGEM
       /*$resultado_b = $quero_testar * 00.075;
       $resultado_c = $quero_testar * 0.15;
       $resultado_d = $quero_testar * 00.225;
       $resultado_e = $quero_testar * 00.275;

    //DIMINUINDO O RESULTADO DA PORCENTAGEM
       $final_b = $resultado_b - $quero_testar;
       $final_c = $resultado_c - $quero_testar;
       $final_d = $resultado_d - $quero_testar;
       $final_e = $resultado_e - $quero_testar;*/



       /*if ($quero_testar <= $a) {
            echo 'Você esta isento ';
       } else if ($quero_testar <= $b) {
            echo 'Terá que pagar 7.5% que dá R$' .$resultado_b. 'reais' ;
       } else if ($quero_testar <= $c) {
        echo 'Terá que pagar 15% que dá R$' .$resultado_c. ' reais';
       } else if ($quero_testar <= $d) {
        echo 'Terá que pagar 22.5% que dá R$ ' .$resultado_d. ' reais';
       } else if ($quero_testar >= $e) {
        echo 'Terá que pagar 27.5% que dá R$' .$resultado_e. ' reais';
       } else {
        echo 'Digite um salário válido.';
       }*/
        
       
        ?>

        
    </body>
</html>

