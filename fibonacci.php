<?php
    $m = 10;
    //fibonacci enter nth power
    function fibonacci($n){
        if($n < 0){
            return -1;
        }
        
        if($n == 0){
            return 0;
        }
        
        if($n == 1 || $n == 2){
            return 1;
        }
        
        $x = 1;
        $y = 1;
        
        $z = 0;
        
        for($i = 0; $i <= $n-2; $i++){
            $z = $x + $y;
            $y = $x;
            $x = $z;
        }
        
        return $z;
    }
    
    echo fibonacci($m)."<br>";
    
    function fibonacci_sequence($n){
        if($n > 0){
            switch($n){
                case 1:
                    echo 1," ";
                    break;
                case 2:
                    echo 1," ",1," ";
                    break;
                default:
                    echo 1," ",1," ";
                    $x = 1;
                    $y = 1;
                    $z = 0;

                    for($i = 0; $i <= $n-2; $i++){
                        $z = $x + $y;
                        echo $z," ";
                        $y = $x;
                        $x = $z;
                    }
            }
        }
    }
    
    fibonacci_sequence($m);
    
    

