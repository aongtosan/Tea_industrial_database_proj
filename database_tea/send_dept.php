<?php 
 session_start();
?>

<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="admin.css">
    <title>Hand's tea industrial</title>
    <script src="https://kit.fontawesome.com/a076d05399.js" ></script>
</head>
<style>  

    .table-sticky{ 
       width:1100px;
       height:710px;
       position:fixed;
       top:10px;
       left:25% ;
       box-shadow: inset 0 0 0 1000px rgba(53,53,53,0.8);
       filter: blurr(10px)  

    }
    .table-sticky h1 {
     font-size:18px;
     padding:10px 20px;
     color:#F2aB53;
    }
    .table-sticky span{
     float:left;
     font-size:18px;
     padding:15px 10px;
     color:#F2aB53;   
     
    }
    .table-sticky table{
       position:relative;
       left:10px; 
       font-size:16px;
       width:1000px;
       height:490px;
    }
    .table-sticky table thead{
        text-align:center;
        padding:5px 10px;
        background:#F2aB53;
        border:1px solid black;
    }
    .table-sticky table thead th{
       width:160px;
       border-radius:24px;
       top:12px;
       position:sticky;
       background:#F2aB53;
       
    }
    .table-sticky table tbody {
        text-align:center;
        padding:2px 3px;
        border:1px solid black;
        color:white;
        font-size:12px;
        display: table-row-group;
        height:300px;
    }
    tr:nth-child(even) {
       box-shadow: inset 0 0 0 1000px rgba(53,53,53,0.7);
       filter: blurr(10px)  
}
 
input:-webkit-autofill,
input:-webkit-autofill:hover, 
input:-webkit-autofill:focus,
textarea:-webkit-autofill,
textarea:-webkit-autofill:hover,
textarea:-webkit-autofill:focus,
select:-webkit-autofill,
select:-webkit-autofill:hover,
select:-webkit-autofill:focus {
  -webkit-text-fill-color: white;
  -webkit-box-shadow: 0 0 0px 1000px rgba(53,53,53,0.8) inset;
  transition: background-color 5000s ease-in-out 0s;
}
    ::-webkit-scrollbar{
    width:6px;
    }
    ::-webkit-scrollbar-thumb{
    border-radius: 30px;
    background: -webkit-gradient(linear,left top,left bottom,from(#363636), to(#222201));
    box-shadow: inset 2px 2px 2px rgba(255,255,255,0.25),inset -2px -2px -2px rgba(0,0,0,0.25)
    }
    ::-webkit-scrollbar-thumb:hover{
    border-radius: 30px;
    background: -webkit-gradient(linear,left top,left bottom,from(#fed130), to(#F2aB53));
    box-shadow: inset 2px 2px 2px rgba(255,255,255,0.25),inset -2px -2px -2px rgba(0,0,0,0.25)
    }
    ::-webkit-scrollbar-track{
    background: linear-gradient()
    
    }   
</style>
<body>
            <?php  
                require('connect.php');
                $name = $con->prepare("
                SELECT Name,Department_name FROM employee LEFT JOIN department ON employee.work_on = department.Department_id WHERE Employee_id = ".$_SESSION["usr"]
                );
                $name->execute();
                $out = $name->get_result()->fetch_assoc();
                echo " <div class=\"blurred-box\">
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
            </div>";
            $car = $con->query("SELECT Department_name,department.Department_manager_id,Car_ID,Car_Status,Vehicle_registration  FROM transportation
            inner join department on transportation.Department_id = department.Department_id
            ");
            $data = "";
            while($row = $car->fetch_row()) {
                $data .= "<tr>".
                "<td>".$row["0"]."</td>".
                "<td>".$row["1"]."</td>".
                "<td>".$row["2"]."</td>".
                "<td>".$row["3"]."</td>".
                "<td>".$row["4"]."</td>".
                "</tr>"
                ;
            }     
             echo "
                <div class=\"table-sticky\" style=\" overflow: scroll;overflow-x: auto; \">
                    <span class=\"fas fa-truck\"></span> <h1>ข้อมูลรถขนส่ง</h1>
                    <table  >
                <thead>
                    <tr>
                        <th>แผนกงาน</th>
                        <th>ผู้ดูแลแผนกงาน</th>
                        <th>รหัสรถขนส่ง</th>
                        <th>สถานะของรถขนส่ง</th>
                        <th>รหัสทะเบียนรถ</th>
                    </tr>
                </thead>
                <tbody>
                ".$data.
                " 
                </tbody>
                    </table>
                </div>";
                    
            ?>
 
              
             
    
</body>
</html>