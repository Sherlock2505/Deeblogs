<?php 

$host = 'localhost:3306';
$user = 'root';
$pass = '';
$db_name = 'blog';

$conn = new MySQLi($host, $user, $pass, $db_name);

if($conn->connect_error){
    die('Database connection error: '.$conn->connect_error);
}else{
    echo("Db connection Successful");
}

?>