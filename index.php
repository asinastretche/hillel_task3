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

$arrDiff1 = array_diff($secondArr, $firstArr);
$arrDiff2 = array_diff($firstArr, $secondArr);
$arrIntersect = array_intersect($firstArr, $secondArr);

$arrAllDiff1 = array_udiff_assoc($firstArr, $secondArr, function($a, $b) {
    return ($a !== $b) ? 1 : 0;
});
$arrAllDiff2 = array_udiff_assoc($secondArr, $firstArr, function($a, $b) {
    return ($a !== $b) ? 1 : 0;
});
$arrAllDiff = array_merge($arrAllDiff1, $arrAllDiff2);

echo '<br>' . "найти все элементы которые отсутствуют в первом массиве и присутствуют во втором: ". print_r($arrDiff1, true);
echo '<br>' . "найти все элементы которые присутствую в первом и отсутствуют во втором: ".print_r($arrDiff2, true);
echo '<br>' . "найти все элементы значения которых совпадают: ". print_r($arrIntersect, true);
echo '<br>' . "найти все элементы значения которых отличается: ". print_r($arrAllDiff, true);

echo '<br>' .'<br>' .'Задание 3. $firstArr = [
    \'one\' => 1,
    \'two\' => [
        \'one\' => 1,
        \'seven\' => 22,
        \'three\' => 32,
    ],
    \'three\' => [
        \'one\' => 1,
        \'two\' => 2,
    ],
    \'foure\' => 5,
    \'five\' => [
        \'three\' => 32,
        \'foure\' => 5,
        \'five\' => 12,
    ],
]; ';

$firstArr = [
    'one' => 1,
    'two' => [
        'one' => 1,
        'seven' => 22,
        'three' => 32,
    ],
    'three' => [
        'one' => 1,
        'two' => 2,
    ],
    'foure' => 5,
    'five' => [
        'three' => 32,
        'foure' => 5,
        'five' => 12,
    ],
];


foreach ($firstArr as $key => $value) {
    if (is_array($value)) {
        $arrayValues = array_values($value);
        if (isset($arrayValues[1])) {
            $secondElements[$key] = $arrayValues[1];
        }
    }}

$totalElements = 0;
$sumElements = 0;
while ($firstArr) {
    $value = array_pop($firstArr);
    $totalElements++;
    if (is_array($value)) {
        foreach ($value as $subValue) {
            $firstArr[] = $subValue;
        }
    } elseif (is_numeric($value)) {
        $sumElements += $value;
    }
}

echo '<br>' . "получить все вторые элементы вложенных массивов: ".print_r($secondElements, true);
echo '<br>' . "получить общее количество элементов в массиве: $totalElements";
echo '<br>' . "получить сумму всех значений в массиве: $sumElements";