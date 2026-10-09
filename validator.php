<?php

function validateAge($age){
    if(!is_numeric($age)) {
        throw new InvalidArgumentException("umur berupa angka");
    }

    if ($age < 0){
        throw new InvalidArgumentException("umur tidak boleh negatif");
    }

    return true;
}


// Validasi nama
function ValidateName($name){
    if(trim($name) == ""){
        throw new InvalidArgumentException("nama tidak boleh kosong");
    }

    if(!preg_match("/^[a-zA-Z\s]+$/", $name)){
        throw new InvalidArgumentException("nama hanya boleh berisi huruf");
    }

    return true;
}