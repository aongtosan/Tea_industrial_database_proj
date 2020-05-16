
<style>
   body{
       margin:0;
       padding:0;
   }
 .yellow-box{
    line-height: 50px;
    top:15%;
    left:35%;
    position: relative;
    width:600px;
    font-size:18px;
    text-align:center;
 }
 .yellow-box ul li {
    padding-top:150px;
  
 }
 .yellow-box ul li i a{
    color:white;
    padding:60px 150px ;
    background-color:#191919;
    border-radius:24px;
    transition:0.4s;
    cursor:pointer;
 }
 .yellow-box ul li i a:hover {
    background-color:#fed130;
    color:#191919;
 }

</style>
<?php 
 session_start();
?>
<!DOCTYPE html>
<head>
<script src="https://kit.fontawesome.com/a076d05399.js" ></script>
    <meta charset="utf-8">
    <link rel="stylesheet" href="menu.css">
    <title>Hand's tea industrial</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php  
                require('connect.php');
                $name = $con->prepare("
                SELECT Name,Department_name FROM employee LEFT JOIN department ON employee.work_on = department.Department_id WHERE Employee_id = ".$_SESSION["usr"]
                );
                $name->execute();
                $out = $name->get_result()->fetch_assoc();
                echo "<div class=\"blurred-box\">
                <div class = \"sidebar\">
                        <img src=\"logo.png\" width=\"100\">
                        <img src=\"profile.png\"> 
                        <div class = \"name\">
                        <h1>".$out['Name']."<br>".$out['Department_name']."              
                        </h1>
                       </div>
                        <ul>
                        <li><a href=\"add_new_emp.php \"><i> เพิ่มข้อมูลของพนักงานใหม่ </i></li>
                        <li><a href=\"del_emp.php \"><i> ลบข้อมูลของพนักงาน </i></li>
                        <li><a href=\"index_edit_emp.php \"><i> แก้ไขข้อมูลของพนักงาน </i></li>
                        <li><a href=\"edit_acc.php \"><i> แก้ไขข้อมูลบัญชีในระบบ </i></li>
                        <li><a href=\"logout.php\"><i>ออกจากระบบ</i></li>
                    </ul>
                </div>
            </div>
            <div class =\"yellow-box\">
                <ul>
                    <li> <i>  <a href=\"edit_emp.php\"> <span class=\"fas fa-wrench\"> </span> แก้ไขข้อมูลของพนักงาน</i> </li>
                    <li> <i>  <a href=\"edit_dept.php\"> <span class=\"fas fa-wrench\"></span> แก้ไขข้อมูลของแผนกงาน </i> </li>
                </ul>
            </div>
            "
            ;
            ?>
</body>
</html>