<?php 
 session_start();
?>
<!DOCTYPE html>
<head>
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
                        <li><a href=\"car_check.php\"><i>ตรวจสอบสถานะของรถ</i></li>
                        <li><a href=\"send_his.php\"><i>ประวัติการขนส่งสินค้า</i></li>
                        <li><a href=\"add_customer.php\"><i>เพิ่มข้อมูลลูกค้า</i></li>
                        
                        <li><a href=\"logout.php\"><i>ออกจากระบบ</i></li>
                    </ul>
                </div>
            </div>";
            ?>
    
</body>
</html>