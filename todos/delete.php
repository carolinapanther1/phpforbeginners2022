<?php

require 'conn.php';

if(isset($_GET['del_id'])){

    $id = $_GET['del id'];

    $delete = $conn->prepare("DELETE FROM
    tasks WHERE id=:id");

    $delete->execute([":id" => $id]);

    header("location: index.php");

}

?>