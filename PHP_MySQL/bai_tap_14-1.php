<?php
// #1 Giải thích về function nhận vào tham số là optional. Nên đặt optional param trước hay sau required param.
// function nhận vào tham số optional là function không nhất thiết phải có tham số optinal đó vẫn có thể chạy được bình thường 
// nên đặt optinal parameter sau required parameter

// #2 Lấy ví dụ về phạm vi của biến.
$aFirstName = ["Quan", "ly"];

$fullName = function ($lastName) use ($aFirstName) {
    foreach ($aFirstName as $firstName) {
        echo "{$firstName}" . ' ' . "{$lastName}" . '<hr>';
    }
};
$fullName('Doan');


// #3 Numeric array là gì. Associative array là gì. Lấy ví dụ.
//  Numeric array là array có các key là dẫy số tăng dần và bắt đầu từ 0 
$aNumericArray = ['0', '1', '2', '3'];
var_dump($aNumericArray);
echo '<hr>';

//  Numeric array là array có các key là có thể được đặt tên
$aAssociativeArray = [
    "quan" => 10000,
    "josh" => 20000,
    "john" => 30000,
    "anna" => 40000
];
var_dump($aAssociativeArray) . '<hr>';
echo '<hr>';

//  #5:  Ứng dụng array_search
$aNumbs = [1, 2, 3, 4, 5, 6];
$addTwoNumbers = function ($target) use ($aNumbs) {
    $aResponse = [];
    for ($i=0; $i < count($aNumbs); $i++) { 
        $firstValue = $aNumbs[$i];
        if ($firstValue <= $target) {
            $secondValue = $target - $firstValue;
            unset($firstValue);

            $secondValueIndex = array_search($secondValue, $aNumbs);

            if ($secondValueIndex !== false) {
                return [$i, $secondValueIndex];
            }
        }
    }
    return $aResponse;  
};
$addTwoNumbers('9');
echo '<hr>';

// #6 Ứng dụng array_map
function multiply($n)
{
    return ($n * $n);
}

$aNumbers = [1, 2, 3, 4, 5];
$b = array_map('multiply', $aNumbers);
var_dump($b);