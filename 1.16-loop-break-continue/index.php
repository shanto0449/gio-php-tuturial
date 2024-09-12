<?php
/* LOOPS*/

//while
// $i=0;
// while($i <= 15){
//     if ($i % 2 == 0){
//         $i++;
//         continue;
//     }
//     echo $i++ . ',';
// }

//do-while

// $i=0;
// do{
//     echo $i++;
// }while ($i <= 15);

//for

$text = 'Hello World';
for($i = 0;$i < strlen($text); $i++){
  echo $text[$i] .'<br>';  
}


$programingLanguage=['Php','java','c++','go','rust'];
foreach($programingLanguage as $key => $language){
    echo $key.':' .$language .'<br>';
}

// for ($i = 0 ; print $i, $i < 15;  $i++){

// }


// {
//     // echo $i;
// }

//foreach
echo '<br>';

$user = [
    'name' => 'Gio',
    'email' => 'gio@gmail.com',
    'skills' => ['PHP','graphql','react'],
];
foreach ($user as $key => $value):
    echo $key . ':';
    if(is_array($value)){
        foreach ($value as $skill){
            echo $skill .'-';
        }

    }else{
        echo $value;
    }
    echo '<br>';
endforeach;




?>