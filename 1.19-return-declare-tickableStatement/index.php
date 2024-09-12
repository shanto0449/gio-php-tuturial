<?php

/* Return / Declare / goto */

// function sum(int $x , int $y){
//     $z = $x + $y;
//     return $z;
// }

// $x = sum(5 , 10);
// echo $x;

// echo '<br>';
// echo 'Hello World';

//declare-ticks


// function onTick(){
//     echo 'Tick <br>';
// }

// register_tick_function('onTick');

// declare(ticks=3);
//  $i = 0;
//  $length = 10;

//  while($i < $length){
//     echo $i++ . '<br>';
//  }

 //declare-encoding

 declare(strict_types=1);
 function sum(int $x , int $y){
    return $x + $y;
 }
echo sum(5,10);

?>