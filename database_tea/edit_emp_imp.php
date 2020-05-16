<?php  
session_start();
require('connect.php');
$emp_id = "'".$_POST['emp_id']."'";
$check ="SELECT Employee_id,Name,Gender,Address,Salary,work_on FROM employee where Employee_id = ".$emp_id;
mysqli_query($con,$check);
 $count = mysqli_affected_rows($con);
//echo $count;
 if($count>0 ){
    $check ="SELECT * FROM department where Department_manager_id = ".$emp_id;
    mysqli_query($con,$check);
    $flag  = mysqli_affected_rows($con); 
    if($flag==0){
        $Name=$_POST['Name'];
        $Department=$_POST['Department'];
        $tel=$_POST['tel'];
        $Salary=intval($_POST['Salary']);
        $house_id=$_POST['House_id'];
        $vil=$_POST['Vil'];
        $city=$_POST['City'];
        $province=$_POST['Province'];
        $Address = $house_id."\r\n".$vil."\r\n".$city."\r\n".$province;
        $check ="SELECT Name,tel,Address,Salary,work_on FROM employee where Employee_id = ".$emp_id;
        $emp_info=$con->query($check);
    
        $info_name;
        $info_Address;
        $info_Salary;
        $info_work_on;
        $info_tel;
        while($row = $emp_info->fetch_row()){
            $info_name = $row[0];
            $info_tel = $row[1]; 
            $info_Address  = $row[2];
            $info_Salary  = $row[3];
            $info_work_on  = $row[4];
        }
        $update="Update 
                 employee
                 SET
                 ";
        if($Name==''){
            $update.="Name = '".$info_name. "'";
        }else {     
            $update.="Name = '".$Name. "'";
        }

        if($tel==''){
            $update.=",tel = '".$info_tel. "'";
        }else {
            $update.=",tel = '".$tel. "'";
        }

        if($house_id==''||$vil==''||$city==''||$province){
            $update.=",Address = '".$info_Address. "'";
        }else {
            $update.=",Address = '".$Address. "'";
        }

        if($Salary==''){
            $update.=",Salary = '".$info_Salary."'";
        }else {
            $update.=",Salary = '".$Salary."'";
        }
        if($Department==''){
            $update.=",work_on = ".$info_work_on;
            
        }else {
            $update.=",work_on = ".$Department;
        }
        
        $update.=" WHERE Employee_id = ".$emp_id;
        // echo $update;
        // echo $info_Address; echo "\n";
        if($con->query($update)) $con->query($update);
        else echo "Error";
       header('location: edit_emp.php');
    }else {
        echo "<script>";
        echo "alert(\"เกิดข้อผิดพลาด: พนักงานหมายเลขดังกล่าวเป็นหัวหน้าแผนกไม่สามารถทำการแก้ไขในหน้านี้ได้\");"; 
        echo "window.history.back()";
        echo "</script>";   
        } 
    
    } else {
     echo "<script>";
     echo "alert(\"เกิดข้อผิดพลาด: ไม่มีพนักงานหมายเลขดังกล่าวอยู่ในระบบ\");"; 
     echo "window.history.back()";
     echo "</script>";   
     } 
   
?>