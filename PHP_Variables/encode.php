<?php


$aArray = ["Ban", "That", "Tuyet", "Voi", "Khi", "Xem", "Den", "Day"];

echo "Đây là mảng đã được encode theo serialize của php". ' <br>';
echo serialize($aArray) . '<br> <br>';

echo "Đây là mảng đã được encode theo Json format". ' <br>';
echo json_encode($aArray);