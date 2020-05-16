<?php 
 session_start();
?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="admin.css">
    <title>Hand's tea industrial</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js" ></script>
    <style>

</style>
</head>
<body>
            <?php  
                require('connect.php');
                $name = $con->prepare("
                SELECT Name,Department_name FROM employee LEFT JOIN department ON employee.work_on = department.Department_id WHERE Employee_id = ".$_SESSION["usr"]
                );
                $name->execute();
                $out = $name->get_result()->fetch_assoc(); 
                echo "
            <div class=\"blurred-box\">
                <div class = \"sidebar\">
                    <div class = \"name\">
                        <h1>".$out['Name']."<br>".$out['Department_name']." </h1>
                    </div>
                    <nav>
            <label for=\"btn\" class =\"button\">แฟ้มข้อมูล
            <span class=\"fas fa-caret-down\"></span>
            </label>
            <input type=\"checkbox\" id=\"btn\">
            <ul class =\"menu\">
                    <li><a href=\" customer_data.php\">ข้อมูลลูกค้า</a></li>
                    <li><a href=\" delivery_data.php\">ประวัติการขนส่งสินค้า</a></li>
            <li>
                <label for=\"btn-2\" class=\"first\">ข้อมูลโรงงาน
                    <span class=\"fas fa-caret-down\"></span>
                    <input type=\"checkbox\" id=\"btn-2\">
                    <ul>
                        <li><a href =\" emp_data.php \">ข้อมูลพนักงาน</a></li>
                        <li><a href =\" dept_data.php\">ข้อมูลแผนกงาน</a></li>
                        <li><a href =\" process_data.php\">ข้อมูลแผนกแปรรูป</a></li>
                        <li><a href =\" send_dept.php\">ข้อมูลแผนกขนส่ง</a></li>
                    </ul>
                </label>
               
            </li>
            <li>
                <label for=\"btn-3\" class=\"second\">ข้อมูลสินค้า-วัตถุดิบ
                    <span class=\"fas fa-caret-down\"></span>
                    <input type=\"checkbox\" id=\"btn-3\">
                    <ul>
                        <li><a href =\" tea_data.php\">ข้อมูลการซื้อใบชา</a></li>
                        <li><a href =\" procress_data.php\">ข้อมูลการแปรรูปสินค้า</a></li>
                    </ul>
                </label>
            </li>
             <li> <i> <a href=\"logout.php\">ออกจากระบบ</a> </i> 
            </li>
            </ul>
        </nav>
            </div>
            
            ";
            
            ?>
    
</body>
</html>