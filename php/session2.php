<?php

session_start()


?>

<html>
<head></head>
<body>
    <h3><?php echo $_SESSION['username'] . "age is" . $_SESSION['age']
        ; ?>
    </h3>
</body>
</html>