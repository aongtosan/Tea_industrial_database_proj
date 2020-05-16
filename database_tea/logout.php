<?php 
    session_start();
    require('connect.php');
    if(isset($_SESSION["usr"])){
        $set_time =$con->prepare("UPDATE account SET logout_time = now() WHERE  Employee_id =".$_SESSION["usr"]);  
        $set_time->execute();
        //set status
        $set_time =$con->prepare("UPDATE account SET Status = 'out' WHERE  Employee_id = ".$_SESSION["usr"]);  
        $set_time->execute();
        session_destroy();
        unset($_SESSION["usr"]);
        header("location: login.php");
    }

?>