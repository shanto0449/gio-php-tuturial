
<?php
//ARRAYS
$programingLanguages = ['PHP', 'Java','Python'];

$programingLanguages[1] = 'C++';
$programingLanguages[] = 'C++';


echo $programingLanguages[1] ."<br>";

echo '<pre>';
print_r($programingLanguages);
echo '</pre>';

echo count($programingLanguages);

array_push($programingLanguages,'C','GO');

echo '<pre>';
print_r($programingLanguages);
echo '</pre>';

$program = [
  'PHP' => '8.0',  
  'Python' => '3,9'

];

$program['go'] = '1.15';
echo '<pre>';
print_r($program);
echo '</pre>';


$array = ['a', 'b', 50=>'c','d','e'];

unset($array[1]);
print_r($array) ;
echo "<br>";
$arr =['a'=>1,'b'=> null];
var_dump(array_key_exists('b',$arr));
echo "<br>";
var_dump (isset($arr['b']));
?>