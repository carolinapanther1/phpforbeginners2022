<?php

require "conn.php";

$data = $conn->query("SELECT * FROM posts");

$all = $data->fetchAll(PDO::FETCH_OBJ);

// echo "<br>";

// print_r ($all);

// echo "<br>";

echo $all["0"]->title;

echo "<br>";

echo $all["0"]->body;

?>