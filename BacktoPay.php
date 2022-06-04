<?php

    if(isset($_POST["detailsSubmit"]))
    {
        session_start();
        $_SESSION["name"] = $_POST["name"];
        $_SESSION["phone"] = $_POST["phone"];
        $_SESSION["email"] = $_POST["email"];
        // echo $_SESSION["name"];
        header("Location: http://localhost/razeopay/pay.php");
    }

?>