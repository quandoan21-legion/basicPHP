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
    foreach ($aNumbs as $numbs1) {
        $numbs2 = $target - $numbs1;
        $aNumbs2 = explode(" ", $numbs2);
        foreach ($aNumbs2 as $Numbs2) {
            if (array_search($Numbs2, $aNumbs) != null) {
                echo array_search($Numbs2, $aNumbs) . ' ' . array_search($numbs1, $aNumbs) . '<br>';
            }
        }      
    }
       
};

$addTwoNumbers('9');