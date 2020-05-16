<?php  
session_start();
require('connect.php');
$car_id = "".$_POST['car_id']."";
$check ="SELECT Car_ID  FROM transportation where Car_ID = ".$car_id;
$loc=mysqli_query($con,$check);
 $count = mysqli_affected_rows($con);
//echo $count;

if($count>0){
     $cond;
     while($row=$loc->fetch_row()){
        $cond =  $row[0];
     }
     $check = "UPDATE transportation SET Car_Status = '".$_POST['status']."'  where Car_ID = ".$car_id;
     $con->query($check);
     header('location: car_check.php');
    
echo $check;
      
    }else {
     echo "<script>";
     echo "alert(\"เกิดข้อผิดพลาด: ไม่มีรถขนส่งดังกล่าวอยู่ในระบบ\");"; 
     echo "window.history.back()";
     echo "</script>";   
     } 
   
?>