<?php
namespace Genius;
use PDO;
use PDOException;

class Connectdb
{
    private $db_host = "localhost";
    private $db_user = "root";
    private $db_pass = "";
    private $db_name = "simplerestdb";
    private $connection; // สร้างเพื่อจะเอาไปใช้ใน function

    public function getConnect(){
        $this->connection = null; //กำหนดค่าให้เป็น null ก่อน
        try{
            $this->connection = new PDO(
                "mysql:host=".$this->db_host.";dbname=".$this->db_name ,
                $this->db_user,
                $this->db_pass
            );
            //echo "Connection Success";
        }catch(PDOException $exception){
            echo "Connection Fail:".$exception->getMessage(); //ให้ส่งค่า error ผ่านตัวแปร exception โดยใช้ function getmessage
        }
        return $this->connection;
    }
}
