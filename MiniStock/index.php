<?php
require_once __DIR__."./vendor/autoload.php";

use Genius\Connectdb;

$dbconnect = new Connectdb();
$connection = $dbconnect->getConnect();

$username="songwut";
$password="12345";
$fullname="songwut udomsin";
$email="mr.songwut.udomsin@gmail.com";
$tel="0641417892";
$status="1";

$sql= " INSERT INTO users (username,password,fullname,email,tel,status) 
        VALUES (:username,:password,:fullname,:email,:tel,:status)";

$stmt=$connection->prepare($sql);
$stmt->bindParam(':username',$username);
$stmt->bindParam(':password',$password);
$stmt->bindParam(':fullname',$fullname);
$stmt->bindParam(':email',$email);
$stmt->bindParam(':tel',$tel);
$stmt->bindParam(':status',$status);

if($stmt->execute()){
    echo "add new member success";
} else {
    echo "add data fail !!";
}