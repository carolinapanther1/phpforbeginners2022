<?php

require "conn.php";

$title = "title number ten";
$body = "body number ten";
$insert = $conn->prepare("INSERT INTO posts (title,body) VALUES (:title, :body)");

$insert->execute(array(
    ':title' => $title,
    ':body' => $body


));

echo ($conn->lastInsertId());



?>