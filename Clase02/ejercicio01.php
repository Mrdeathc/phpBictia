<?php

    function imprimir($num = 0){
        for($i = 0; $i <= 99; $i++){
            $num = $num + 1;
            echo "<p>$num</p>";
        }
        echo "<hr>";
        if($num == 100){
            for($i = 100; $i <= 199; $i++){
                $num = $num + 1;
                echo "<p>$num</p>";
            }
        }
    }

    imprimir();
    

    function tablas(){

        $num1a =1;
        $num1b = 10;
    
        for ($inicial = $num1a; $inicial <= $num1b; $inicial++){
            echo 'Tabla del '. $inicial .'<br/>';
        for ($i = 1; $i <= 10; $i++){
            echo $inicial. '*' . $i . '=' . $inicial * $i . '<br/>';
        }
            echo '<br/>';
        }
    }

    tablas();

    if($variable % 2 == 0)
   echo "$variable es múltiplo de 2";
    else
   echo "$variable no es múltiplo de 2"; 

?>