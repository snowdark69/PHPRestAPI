<?php
require_once __DIR__."/app/autoload.php";

use Genius\User; //เรียก Class ผ่าน namespace

$user = new User(); //สร้าง Object ขึ้นมา เพื่อใช้กับ Class
$user->first_name = "songwut"; // เปลี่ยค่าใน class เป็น songwut
$user->last_name = "udomsin"; // เปลี่ยค่าใน class เป็น songwut
$user->email = "cphos@gmail.com"; // เปลี่ยค่าใน class เป็น songwut

// -> เข้าถึง object ใน class

$user->loginprocess(); // เรียกใช้ fuction ชื่อ loginprocess