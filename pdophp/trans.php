<?php

require "conn.php";

try{
    $conn->setATTRIBUTE(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $conn->beginTransaction();
    $conn->query("INSERT INTO posts (title, 
    body) VALUES ('javascript', 'body about php')");
    $conn->commit();

}catch(Exception $e) {
    $conn->rollback();
    echo $e->getMessage();
}



?>