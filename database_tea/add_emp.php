<?php 
    session_start();
    require('connect.php');
    if(  isset($_POST['Citizen_id']) && $_POST['Employee_id']&& $_POST['Name'] && $_POST['Gender']&& $_POST['tel']&& $_POST['Department']&& $_POST['House_id'] 
       && $_POST['Vil']&& $_POST['Province']&& $_POST['Salary']
    ){
    
          $house_id=$_POST['House_id'];
          $vil=$_POST['Vil'];
          $city=$_POST['City'];
          $province=$_POST['Province'];
          $Citizen_id=$_POST['Citizen_id'];
            $Employee_id =  $_POST['Employee_id'];
            $Name = $_POST['Name'];
            $Gender = $_POST['Gender'];
            $tel = $_POST['tel'];
            $Address = $house_id."\r\n".$vil."\r\n".$city."\r\n".$province;
            $Salary = intval($_POST['Salary']);
            $work_on = intval($_POST['Department']);
            $code ="
            INSERT INTO employee (Employee_id,Name,Gender,tel,Address,Salary,work_on) VALUES ('".$Employee_id."','".$Name."','".$Gender."','".$tel."','".$Address."',".$Salary.",".$work_on.") ";
           // $con->query($code);
            if ($con->query($code)) $con->query($code);
            else echo "error\n";
            $code = "
            INSERT INTO citizen (Employee_id,Citizen_id) VALUES ('".$Employee_id."','".$Citizen_id."') ";
           // $con->query($code);
            if ($con->query($code) ) $con->query($code);
            else  { echo "<script>";
            echo "alert(\"ข้อมูลไม่ถูกต้อง\");"; 
            echo "window.history.back()";
            echo "</script>"; 
              }
           header('location: add_new_emp.php');
    }else{
      echo "<script>";
          echo "alert(\"กรุณากรอกข้อมูลให้ครบถ้วน\");"; 
          echo "window.history.back()";
          echo "</script>";
    }
?>