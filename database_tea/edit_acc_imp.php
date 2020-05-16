<?php  
session_start();
require('connect.php');
$acc_id = "'".$_POST['acc_id']."'";
$check ="SELECT user_name  FROM account where user_name = ".$acc_id;
$loc=mysqli_query($con,$check);
 $count = mysqli_affected_rows($con);
//echo $count;

if($count>0){
     $cond;
     while($row=$loc->fetch_row()){
        $cond =  $row[0];
     }
     $pass_check ="SELECT pass FROM account where user_name  = ".$acc_id;
     $verify = $con->query( $pass_check);
     while($row=$verify->fetch_row()){
        $cond =  $row[0];
     }
     if($cond!=$_POST['pass']){
         $code = "UPDATE account SET pass = '". $_POST['pass'] ."' WHERE user_name = ".$acc_id ;
        // echo $code; 
              $con->query($code);
              header('location: edit_acc.php');
    }else {
        echo "<script>";
        echo "alert(\"เกิดข้อผิดพลาด: รหัสผ่านซ้ำกับบัญชีผู้ใช้อื่นดังกล่าว\");"; 
        echo "window.history.back()";
        echo "</script>";   
        } 
      
    }else {
     echo "<script>";
     echo "alert(\"เกิดข้อผิดพลาด: ไม่มีบัญชีผู้ใช้ดังกล่าวอยู่ในระบบ\");"; 
     echo "window.history.back()";
     echo "</script>";   
     } 
   
?>