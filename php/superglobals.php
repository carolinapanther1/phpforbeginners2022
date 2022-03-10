<?php

    // if(isset($_POST['submit'])) {
    //     $username = $_POST['username'];

    //     $email = $_POST['email'];

    //     echo "my username is : $username ,
    //     and my email is : $email";

    // }

    if(isset($_GET['lang'])){
        $get = $_GET['lang'];

        echo "my favorite language is:  $get";
    }

?>

<html>
<head></head>
<body>
    <!--<form method = "POST" action="superglobals.php">
        username : <input type ="text" name = "username">
        <br>

        email: <input type ="text" name = "email">
        <br>

        <input type="submit" name = "submit">
    </form>-->
    <a href= "superglobals.php?lang=php">
    get link</a>
</body>
</html> 


