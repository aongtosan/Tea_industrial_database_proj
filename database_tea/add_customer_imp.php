<?php  
session_start();
require('connect.php');
if(isset ($_POST['customer'],$_POST['cus_id'],$_POST['mail'],$_POST['canon'],$_POST['district'],$_POST['province'],$_POST['tel'] )   
          ){
              
                
                   $code = "INSERT INTO customer(Compan_ID, Company_name, Email, tel, Province, District, canton)
                   VALUES('".$_POST['cus_id']."','".$_POST['customer']."','".$_POST['mail']."','".$_POST['tel']."','".$_POST['province']."','".$_POST['district']."','".$_POST['canon']."') ";
                
                if( $con->query($code)){
                  $con->query($code) ; 
                  header('location: add_customer.php');
                }
                
                else{
                  echo "<script>";
                  echo "alert(\"เกิดข้อผิดพลาด กรุณากรอกข้อมูลใหม่\");"; 
                  echo "window.history.back()";
                  echo "</script>";
                  //header('location: buy_tea.php');
                } 
                
} 
?>