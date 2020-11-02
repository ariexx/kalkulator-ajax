<?php

$angka1 = $_POST['angka_pertama'];
$angka2 = $_POST['angka_kedua'];
$operator = $_POST['operator'];

if($operator == "x") {
    echo $angka1 * $angka2;
}else if ($operator == "+") {
    echo $angka1 + $angka2;
}else if($operator == "-") {
    echo $angka1 - $angka2;
}else if($operator == "/") {
    echo $angka1 / $angka2;
}else{
    echo "ERROR #1";
}