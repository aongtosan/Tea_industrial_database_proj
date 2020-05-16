<?php  
session_start();
require('connect.php');
if(isset (
        $_POST['Item_ID'],$_POST['manufactering_date'],$_POST['quantity'],$_POST['price_u'],$_POST['product_name'],$_POST['Expiration_date'],$_POST['work_station'])    
        ){
              
                  $Item_ID=$_POST['Item_ID'];
                  $craft_date=$_POST['manufactering_date'];
                  $Quantity=intval($_POST['quantity']); 
                  $Price=intval($_POST['price_u']);
                  $product=$_POST['product_name']; 
                  $Expiration_date=$_POST['Expiration_date'];
                  $work=$_POST['work_station'];
                   $code = "
                   INSERT INTO transform( station, Item_ID, Product_Name, Quantity, Manufactured_date, Expiration_date, Price) 
                   VALUES ('".$work."','".$Item_ID."','".$product."',".$Quantity.",'".$craft_date."','".$Expiration_date."',".$Price.") ";
                
                if( $con->query($code)){
                  $con->query("
                  INSERT INTO `material`(`Item_ID`, `Tea_ID`) VALUES ('".$Item_ID."','".$_POST['tea_leaf']."' )
                  ");
                  $con->query($code) ; 
                  header('location: save_product.php');
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