<?php
/* Control Structures (if/else/else if)*/
$score = 95;
if($score >= 90){
    echo 'A';
    if ($score >= 95){
        echo '+';
    }
} else if ($score >= 80){
    echo 'B';
    if ($score >= 85){
        echo '+';
    }
}else if($score >= 70){
    echo 'c';
    if ($score >= 75){
        echo '+';
    }

}else if($score >= 60){
    echo 'D';
    if ($score >= 65){
        echo '+';
    }
} else{
    echo 'F';
}


?>