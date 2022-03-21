<?php
require_once __DIR__."./vendor/autoload.php";

use Genius\Connectdb;

$dbconnect = new Connectdb(); // op จะไม่สามารถเอา class มาใช้ได้ทันที่ จะต้องใช้การแทนค่าด้วยตัวแปรในการเอามาใช้งานแทนการไปเขียนหรือใช้งาน object หรือ class นั้นโดยตรง (กรณีไม่ได้ระบุฟังก์ชั่นเป็น static)
$connection = $dbconnect->getConnect();

$sql="SELECT * FROM users ORDER BY id DESC";
$stmt=$connection->prepare($sql);
$stmt->execute();

//  อ่านข้อมูลออกมาจาก execute โดยใช้ fetchAll
$result=$stmt->fetchAll(PDO::FETCH_ASSOC); //FETCH_ASSOC สาามารถใช้ดึงข้อมูลออกมาได้แบบทั้ง index , หรือ ชื่อฟิว  
// :: เป็นการเรียกใช้ฟังก์ชั่น static ของ PDO จะเรียกใช้คนละแบบกับฟังก์ชั่นทั่วไปที่ใช้ -> ปกติ ซึ่งจะไม่ต้องใช้การแทนค่าตัวแปร เช่น new conectdb

echo json_encode($result);

//print_r($result); // print_r = print array