<?php  
session_start();
require('connect.php');
if(isset (
        $_POST['Tea_ID'],$_POST['Purchase_date'],$_POST['Quantity'],$_POST['Price'],$_POST['tea_type'],$_POST['Expiration_date'],$_POST['house_id'],$_POST['vil'],$_POST['city'],$_POST['province'])   
          ){
              
                  $Tea_ID=$_POST['Tea_ID'];
                  $Purchase_date=$_POST['Purchase_date'];
                  $Quantity=intval($_POST['Quantity']); 
                  $Price=intval($_POST['Price']);
                  $tea_type=$_POST['tea_type']; 
                  $Expiration_date=$_POST['Expiration_date'];
                  $house_id=$_POST['house_id'];
                  $vil=$_POST['vil'];
                  $city=$_POST['city'];
                  $province=$_POST['province'];
                  $manufacturer = $house_id."\r\n".$vil."\r\n".$city."\r\n".$province;
                   $code = "
                   INSERT INTO tea_leaf (Tea_ID,Type,Quantity,Expiration_date,Purchase_date,Manufacturer,Price)
                   VALUES ('".$Tea_ID."','".$tea_type."',".$Quantity.",'".$Expiration_date."','".$Purchase_date."','".$manufacturer."',".$Price.") ";
               
                if( $con->query($code)){
                  $con->query($code) ; 
                  header('location: buy_tea.php');
                }
                // $con->query($code) ; 
                else{
                  echo "<script>";
                  echo "alert(\"เกิดข้อผิดพลาด กรุณากรอกข้อมูลอีกคร้้ง\");"; 
                  echo "window.history.back()";
                  echo "</script>";
                  //header('location: buy_tea.php');
                } 
}
?>