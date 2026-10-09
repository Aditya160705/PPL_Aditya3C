<?php
//file:
require_once "validator.php";

//test case 1: umur valid
try {
    $result = validateAge(25);
    echo "PASS: Umur 25 diterima\n";
}catch (Exception $e){
    echo "FAIL: Umur 25 tahun diterima. Error:". $e->getMessage() . "\n";
}


//test case 2: nama lengkap
try {
    $result = ValidateName("Dwi Vani Ismaditya");
    echo "PASS: Nama lengkap Dwi Vani Ismaditya diterima\n";
}catch (Exception $e){
    echo "FAIL: Nama lengkap ditolak. Error: " . $e->getMessage() . "\n";
}


//test case 3: nama dengan angka
try {
    $result = ValidateName("Aditya123");
    echo "FAIL: Nama dengan angka seharusnya ditolak\n";
}catch (Exception $e){
    echo "PASS: Nama dengan angka ditolak\n";
}


//test case 4: nama kosong
try {
    $result = ValidateName("");
    echo "FAIL: Nama kosong seharusnya ditolak\n";
}catch (Exception $e){
    echo "PASS: Nama kosong ditolak\n";
}