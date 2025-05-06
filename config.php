<?php
$dbhost='localhost';
$dbname='online_course';
$dbuser='root';
$dbpass='';
try{
  $pdo=new PDO('mysql:host={$dbhost};dbname={$dbname}',$dbuser,$dbpass);
  $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $exception){
  echo "Connection error". $exception->getMessage();
}
define("BASE_URL","http://localhost:4000/");
define("ADMIN_URL",BASE_URL."admin/");

