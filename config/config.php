<?php
$dbhost='localhost';
$dbname='admin_panel_php';
$dbuser='root';
$dbpass='';
try{
  $pdo=new PDO("mysql:host={$dbhost};dbname={$dbname}",$dbuser,$dbpass);
  $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $exception){
  echo "Connection error". $exception->getMessage();
}
define("BASE_URL","http://localhost:4000/");
define("ADMIN_URL",BASE_URL."admin/");

define("SMTP_HOST","sandbox.smtp.mailtrap.io");
define("SMTP_PORT","sandbox.smtp.mailtrap.io");
define("SMTP_USERNAME","sandbox.smtp.mailtrap.io");
define("SMTP_PASSWORD","sandbox.smtp.mailtrap.io");


