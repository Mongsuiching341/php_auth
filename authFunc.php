<?php

// save user data 
define("DB_NAME", "C:\\Users\\HP\\Documents\\php-auth\\user.csv");


function saveData($user)
{
    $fp = fopen(DB_NAME, "a");
    fputcsv($fp, $user);
}


function getData()
{
    $fp = fopen(DB_NAME, "r");

    $data = [];

    while ($tmpData = fgetcsv($fp)) {
        array_push($data, $tmpData);
    }
    return $data;
}


// user image upload

function upload($fileName)
{
    // $fileName =  $_FILES['photo']['name'];
    move_uploaded_file($_FILES['photo']['tmp_name'], "uploads/" . $fileName);
}
