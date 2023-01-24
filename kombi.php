<?php
class Kombinatorika{
    function factorial($n){
        if($n < 0){
            return "error";
        }
        if($n == 0 || $n == 1){
            return 1;
        }
        $number = $n;
        for($i = 1; $i < $n; $i++){
            $number *= $i;
        }
        return $number;
    }
    /*
    function variable($n, $k, $o){
        if($o == true)
    }
    */
}
