<?php 
 session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
 <meta charset="utf-8">
 <title>Welcome to Hand's tea industrial</title>
</head>
<body>
    <?php
        require('connect.php');
    // echo $_SESSION["usr"];
      $verify = $con->prepare("SELECT * FROM department WHERE department_manager_id = ".$_SESSION["usr"]);
    // $verify->bind_param('ss',$_SESSION["usr"]);
     $verify->execute();
     try{
        if($role=$verify->get_result()->fetch_assoc()){
            switch($role['Department_name']){
                case "Product":
                    header('location: product.php');
                    break; 
                case "Administrative":
                    header('location: Administrative.php');
                    break;  
                case "Transaportation":
                    header('location: Transaportation.php');
                    break;
                case "Supplier":
                    header('location: Supplier.php');
                    break;  
                case "Accountant":
                    header('location: Accountant.php');
                    break; 
                case "Management":
                        header('location: Management.php');
                        break;
                } 
        }else{
            echo "<script>";
            echo "alert(\"เกิดข้อผิดพลาด: ไม่สามารถเข้าการถึงการใช้งานดังกล่าวได้กรุณาติดต่อผู้ดูแล\");"; 
            echo "window.history.back()";
            echo "</script>";   
        }
        
     }catch(Exception $e){
        
     }
    ?>
</body>