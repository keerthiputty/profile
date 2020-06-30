<?php

create_table("keerthi_form_table");

function get_db_connection(){
    $servername="librarysquare20.slccwebdev.com";
    $username="librarysquare20";
    $db_name="librarysquare20";
    $password="librarysquare2020";

    try{
    $conn = new PDO("mysql:host=$servername;dbname=$db_name",$username,$password);
//set the pdo error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
echo "connected successfully";

    }catch(PDOException $e){
echo "connection failed:".$e->getMessage();
    }

    return $conn;
}

function create_table($table_name){
    $conn=get_db_connection();
    try{
        //create table
        $sql="CREATE TABLE $table_name(
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            name NVARCHAR(255),
            email NVARCHAR(255),
            phone NVARCHAR(255),
            subject NVARCHAR(255),
            message NVARCHAR(255)
        )";


        //use exec() because no results are returned
        $conn->exec($sql);
        echo "\ntable $table_name created successfully";
    }catch(PDOException $e){
        echo "Failed to create table".$e->getMessage();
    }
    $conn=null;
}

/*function cotact_form_insert($name,$email,$phone,$subject,$message){
    $conn=get_db_connection();
    try{
        $sql="INSERT INTO keerthi1_form_data(
            name,email,phone,subject,message) VALUES(
            $name,$email,$phone,$subject,$message)";

            $conn->exec($sql);
            echo "<br> Inserted successfully";
    }catch(PDOException $e){
        echo $sql."<br>".$e->getMessage();
    }
$conn=null;
}

function cotact_form_insert();*/
?>