<?php
$dbms= "mysql"; //jika mau ganti ke database Postgres, oracle
$host= "localhost";
$dbname= "mydata";
$username= "root";
$password= "ciabejir";
//pdo koneksi harus di bungkus try - catch 
try{
    $db = new PDO ("$dbms:host={$host};dbname={$dbname}", $username, $password);
    echo "<script>console.log('Koneksi Sukses')</script>";
    //echo "Koneksi Sukses"
}catch(PDOException $exception){
    die ("Connection error: " . $exception->getMessage());
}