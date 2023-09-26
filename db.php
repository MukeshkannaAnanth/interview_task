<?php

$host = 'localhost';
$dbname = 'interview_task';
$username = 'root';
$password = '';

define(__ROOT__,'/interview_task/controller/registerdata.php');

try {
  $db = new PDO("mysql:host=$host;dbname=$dbname;charset=UTF8",$username, $password);
  if($db){
  //echo "Connected to database";
  }
} catch (\Throwable $th) {
    echo $th->getMessage();
}

?>