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
                        <li><a href=\"buy_tea.php\"><i>บันทึกข้อมูลการซื้อใบชา</i></li>
                        
                        <li> <i> <a href=\"logout.php\">ออกจากระบบ</a> </i> 
                    
                    </ul>
                </div>
            </div>";
            ?>
    
</body>
</html>