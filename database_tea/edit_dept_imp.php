<?php  
session_start();
require('connect.php');
$emp_id = "'".$_POST['emp_id']."'";
$check ="SELECT work_on FROM employee where Employee_id = ".$emp_id;
 $loc = mysqli_query($con,$check);
 $count = mysqli_affected_rows($con);
//echo $count;
 if($count>0){
     $cond;
     while($row=$loc->fetch_row()){
        $cond =  $row[0];
     }
    if($cond==$_POST['dept_id']){
        $code = "UPDATE department SET department_manager_id = ".$emp_id." WHERE Department_id = ".$cond ;
        // echo $code;
         $con->query($code);
         header('location: edit_dept.php');
    }else {
        echo "<script>";
        echo "alert(\"เกิดข้อผิดพลาด: พนักงานหมายเลขดังกล่าวไม่ได้สังกัดในแผนกงานนี้\");"; 
        echo "window.history.back()";
        echo "</script>";   
        } 
      
    }else {
     echo "<script>";
     echo "alert(\"เกิดข้อผิดพลาด: ไม่มีพนักงานหมายเลขดังกล่าวอยู่ในระบบ\");"; 
     echo "window.history.back()";
     echo "</script>";   
     } 
   
?>