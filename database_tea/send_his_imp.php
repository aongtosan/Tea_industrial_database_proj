<?php  
session_start();
require('connect.php');
$car_id = "".$_POST['car_id']."";
$com_id = "'".$_POST['com_id']."'";
$item_id = "'".$_POST['item_id']."'";
$check ="SELECT Car_Status  FROM transportation where Car_ID = ".$car_id;
if( $con->query($check)){
    $cond="";
    $row = $con->query($check);
    while($data=$row->fetch_row()){
      $cond = $data[0];
    } 
    if($cond!="AVAILABLE"){
        echo "<script>";
        echo "alert(\"เกิดข้อผิดพลาด: รถคันส่งคันดังกล่าวถูกใช้งานอยู่ในขณะนี้\");"; 
        echo "window.history.back()";
        echo "</script>";   
       }
       else{   
            $check ="SELECT Product_Item FROM send where Product_Item = ".$item_id;
            mysqli_query($con,$check);
            $count = mysqli_affected_rows($con);
            if($count>0){
                echo "<script>";
                echo "alert(\"เกิดข้อผิดพลาด: สินค้าดังกล่าวได้กำลังส่งอยู่ในขณะนี้\");"; 
                echo "window.history.back()";
                echo "</script>";
            }else{
                $check ="UPDATE transportation SET Car_Status = 'ON USED' where Car_ID = ".$car_id;
                $con->query($check);
                $check ="INSERT INTO send(Car_ID, Compan_ID, Product_ID, Send_date) 
                       VALUES ('".$car_id."',".$com_id.",".$item_id.",'".$_POST['deli_date']."')";
                $con->query($check);
               
                header('location: send_his.php');
            }   
            
        }

    }
//echo $count;

// if($count>0){
//      $cond;
//      while($row=$loc->fetch_row()){
//         $cond =  $row[0];
//      }
//      $pass_check ="SELECT pass FROM account where user_name  = ".$acc_id;
//      $verify = $con->query( $pass_check);
//      while($row=$verify->fetch_row()){
//         $cond =  $row[0];
//      }
//      if($cond!=$_POST['pass']){
//          $code = "UPDATE account SET pass = '". $_POST['pass'] ."' WHERE user_name = ".$acc_id ;
//         // echo $code; 
//               $con->query($code);
//               header('location: edit_acc.php');
//     }else {
//         echo "<script>";
//         echo "alert(\"เกิดข้อผิดพลาด: รหัสผ่านซ้ำกับบัญชีผู้ใช้อื่นดังกล่าว\");"; 
//         echo "window.history.back()";
//         echo "</script>";   
//         } 
      
//     }else {
//      echo "<script>";
//      echo "alert(\"เกิดข้อผิดพลาด: ไม่มีบัญชีผู้ใช้ดังกล่าวอยู่ในระบบ\");"; 
//      echo "window.history.back()";
//      echo "</script>";   
//      } 
   
?>