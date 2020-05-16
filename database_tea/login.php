<?php
     session_start(); 
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
 <meta charset="utf-8">
 <title>Welcome to Hand's tea industrial</title>
 <link rel="Stylesheet" href="login_db.css">
</head>
<body>
    <?php
        require('connect.php');
      // else echo "connection complete <br>";  
      //include('connect.php');
      if(isset( $_POST['user'])&& $_POST['pass'] ){
         $usr = $_POST['user'];
         $pass = $_POST['pass'];
      //  echo $usr." <br>".$pass;
      $result = $con->prepare("SELECT * FROM account WHERE user_name =? AND pass =?");
      $result->bind_param('ss',$usr,$pass);
      $result->execute();
      try{
        $result =  $result->get_result();
        if($Employee_id = $result->fetch_assoc()){
          //set time
        //  echo "  <font color=\"#ED2939\">เข้าสู่ระบบเรียบร้อย</font>";
          $set_time =$con->prepare("UPDATE account SET login_time = now() WHERE  user_name =? AND pass =?");  
          $set_time->bind_param('ss',$usr,$pass);
          $set_time->execute();
          //set status
          $set_time =$con->prepare("UPDATE account SET Status = 'in' WHERE  user_name =? AND pass =?");  
          $set_time->bind_param('ss',$usr,$pass);
          $set_time->execute();
          //create session
          $_SESSION["usr"] = $usr;
          //Authentication 
          header('location: validate.php');        
       
      }else {// username or password == null
        echo " <form class=\"loginbox\" action=\"login.php\" method=\"POST\" autocomplete=\"off\">
        <img src=\"logo.png\" > 
       <h1>ยินดีต้อนรับเข้าสู่ระบบ</h1>
       <font color=\"#D0312D\">รหัสผ่านหรือชื่อผู้ใช้ไม่ถูกต้อง</font> 
       <input type=\"text\" name=\"user\" placeholder=\"รหัสผู้ใช้งาน\">
       <input type=\"password\" name=\"pass\" placeholder=\"รห้สผ่าน\" >
       <input type=\"submit\" name=\"send\" value=\"LOGIN\"> 
      </form>";
      }

    }catch(Exception $e){
         echo "error";
      }     
      }else {// username or password == null
        echo " <form class=\"loginbox\" action=\"login.php\" method=\"POST\" autocomplete=\"off\">
        <img src=\"logo.png\" > 
       <h1>ยินดีต้อนรับเข้าสู่ระบบ</h1>
       <font color=\"#FED130\">โปรดระบุชื่อผู้ใชัและรหัสผ่าน</font> 
       <input type=\"text\" name=\"user\" placeholder=\"รหัสผู้ใช้งาน\">
       <input type=\"password\" name=\"pass\" placeholder=\"รห้สผ่าน\" >
       <input type=\"submit\" name=\"send\" value=\"LOGIN\"> 
      </form>";
      }
    ?>

</body>
