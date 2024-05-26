<?php
echo 'Задание 1. $arr = [1, 2, 3, 7, 31, 4, 1, 8, 6]';

$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];
$lengthArr = count($arr);

$mixArr1 = array_slice($arr, 0,4);
$mixArr2 = array_slice($arr, 4, 5);
$resultMixArr = array_merge($mixArr2, $mixArr1);

$sumArr = array_slice($arr, 3,3);
$sumArr = array_sum( $sumArr);

echo '<br>' . "посчитать длину массива: $lengthArr";
echo '<br>' . "переместить первые 4 элемента массива в конец массива:"; print_r($resultMixArr) ;
echo '<br>' . "получить сумму 4,5,6 элемента: ". $sumArr;

echo "<br>"."<br>".'Задание 2. $firstArr = [
  \'one\' => 1,
  \'two\' => 2,
  \'three\' => 3,
  \'foure\' => 5,
  \'five\' => 12
]';
echo "<br>".'$secondArr = [
        \'one\' => 1,
        \'seven\' => 22,
        \'three\' => 32,
        \'foure\' => 5,
        \'five\' => 13,
        \'six\' => 37
   ]';

$firstArr = [
    'one' => 1,
  'two' => 2,
  'three' => 3,
  'foure' => 5,
  'five' => 12
];
$secondArr = [
    'one' => 1,
    'seven' => 22,
    'three' => 32,
    'foure' => 5,
    'five' => 13,
    'six' => 37,
];
