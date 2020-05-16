<?php 
    session_start();
    require('connect.php');
          if(isset( $_POST['emp_id'])){
            $emp_id= "'".$_POST['emp_id']."'";
            // $con->query($code);
             $code = "DELETE FROM employee where Employee_id = ".$emp_id;
             $check ="SELECT Employee_id FROM employee where Employee_id = ".$emp_id;
             
            //echo $code;
            mysqli_query($con,$check);
       //     echo mysqli_affected_rows($con);
        $count = mysqli_affected_rows($con);
        if($count>0 ){
                $con->query($code);
                header('location: del_emp.php');
           }else {
            echo "<script>";
            echo "alert(\"เกิดข้อผิดพลาด: ไม่มีพนักงานหมายเลขดังกล่าวอยู่ในระบบ\");"; 
            echo "window.history.back()";
            echo "</script>";   
            } 
         } 
        
 
?>