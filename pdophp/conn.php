<?php



// if($conn == true){
//     echo "database is working";
// }else {
//     echo "database failed";
// }

try{

    //host, dbname, user , password

$host = "localhost";
$dbname = "blogpost";
$user = "root";
$password = "";

$conn = new PDO ("mysql:host=$host;dbname=$dbname", "$user", "$password");

    $conn->setATTRIBUTE(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


} catch(PDOException $e) {
    echo $e->getMessage();
}




?>