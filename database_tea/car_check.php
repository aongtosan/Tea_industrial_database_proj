<?php 
 session_start();
?>

<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="menu.css">
    <title>Hand's tea industrial</title>
    <script src="https://kit.fontawesome.com/a076d05399.js" ></script>
</head>
<style>
   .wrapper{    
       width:1200px;
       background:inherit;
       height:85px;
       position:fixed;
       top:15px;
       left:20% ;
       box-shadow: inset 0 0 0 200px rgba(53,53,53,0.8);
       filter: blurr(10px)   
   }
   .data-form{
       background:transparent;    
       font-size:16px;       
       padding:5px 10px;
       color:white;
    }
   .data-form h1{
     font-size:16px;
     padding:5px 10px;
     color:#fed130;
   }
   .data-form input[type="text"]{
    width:200px; 
    border-radius:5px;
    border: 1px solid #777B7E;   
    display:inline-block;
    color:white;
    text-align:center; 
    background:none;
   }
  
   .data-form select {
    width:120px;
    height:18px;    
    border-radius:5px;
    border: 1px solid #777B7E;   
    display:inline-block;
    color:#fed130; 
    text-align:center;
    background:none; 
   }
   .data-form input[type="submit"]{
     position:relative;
     left:1100px;
     display:block;
     background-color:#191919;
     border:none;
     border-radius:24px;
     width:60px;
     height:30px;
     outline: none;
     color: white;
     transition: 0.25s;
     cursor:pointer;

   }
   .wrapper span{
       padding-top:5px;
       padding-left:5px;
       float:left;
       color:#fed130;  
   }
   .data-form input[type="submit"]:hover{
    background-color: #2ecc71;
    }
    .table-sticky{ 
       width:1200px;
       height:590px;
       position:fixed;
       top:120px;
       left:20% ;
       box-shadow: inset 0 0 0 1000px rgba(53,53,53,0.8);
       filter: blurr(10px)  
    }
    .table-sticky h1 {
     font-size:18px;
     padding:10px 20px;
     color:#fed130;
    }
    .table-sticky  span{
     float:left;
     font-size:18px;
     padding:15px 10px;
     color:#fed130;   
    }
    .table-sticky  table{
       position:relative;
       left:10px; 
       font-size:16px;
       width:1100px;
       height:450px;
    }
    .table-sticky table thead{
        text-align:center;
        padding:5px 10px;
        background-color:#fed130;
        border:1px solid black;
    }
    .table-sticky  table thead th{
        width:120px;
        height:30px;
       border-radius:24px;
       top:12px;
       position:sticky;
       font-size:14px;
       background-color:#fed130;
    }
    .table-sticky  table tbody{
        text-align:center;
        padding:2px 3px;
        border:1px solid black;
        color:white;
        font-size:12px;
        display: table-row-group;
        height:300px;
    }
    .data-form input {
    width:150px;
    height:18px;    
    border-radius:5px;
    border: 1px solid #777B7E;   
    display:inline-block;
    text-align:center;
    background:none; 
    max-width: 150px;
    color:#Fed130;
   }
   .data-form p{
   
   margin-left:60px;
 }
    ::-webkit-scrollbar{
    width:8px;
    }
    ::-webkit-scrollbar-thumb{
    border-radius: 30px;
    background: -webkit-gradient(linear,left top,left bottom,from(#363636), to(#222201));
    box-shadow: inset 2px 2px 2px rgba(255,255,255,0.25),inset -2px -2px -2px rgba(0,0,0,0.25)
    }
    ::-webkit-scrollbar-thumb:hover{
    border-radius: 30px;
    background: -webkit-gradient(linear,left top,left bottom,from(#FFFACD), to(#FED130));
    box-shadow: inset 2px 2px 2px rgba(255,255,255,0.25),inset -2px -2px -2px rgba(0,0,0,0.25)
    }
    ::-webkit-scrollbar-track{
    background: linear-gradient()
    
    } 
    tr:nth-child(even) {
  box-shadow: inset 0 0 0 1000px rgba(53,53,53,0.8);
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


</style>
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
                        <li> <i> <a href=\"logout.php\">ออกจากระบบ</a> </i>                     
                    </ul>
                </div>
            </div>";
            
                $car = $con->query("SELECT * FROM transportation");
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
                $Emp_id = $con->query("SELECT transportation.Car_ID FROM transportation ORDER BY transportation.Car_ID");
                $in_list ="";
                while($row = $Emp_id->fetch_row()) {
                    $in_list.="<option value = ".$row[0]."></option>";
                }    
            echo " <div class=\"wrapper\">
                      <span class=\"fas fa-wrench\"> </span> 
                      <form class=\"data-form\" action=\"car_check_imp.php\" method=\"POST\" >   
                      <h1>แก้ไขสถานะของรถขนส่ง </h1>
                     <p>
                  
                       รหัสรถขนส่ง <input list =\"car_id\" placeholder=\" รหัสรถขนส่ง\" name=\"car_id\" required autocomplete =off>
                       <datalist id =\"car_id\" >
                       ".
                       $in_list
                       ."
                       </datalist>
                       <select id=\"status\" name=\"status\" >
                        <option  value=\"ON USED\">กำลังใช้งาน</option>
                        <option  value=\"MAINTAINED\">ซ่อมบำรุง</option>
                        <option  value=\"AVAILABLE\">พร้อมใช้งาน</option>
                       </select>
                       
                    </p>
                       <input type=\"submit\" name=\"send\" value=\"ยืนยัน\"> <br>
                       </form>
                    </div>
                    
                <div class=\"table-sticky\" style=\" overflow: scroll;overflow-x: auto; \">
                    <span class=\"fas fa-truck\"></span> <h1>ข้อมูลรถขนส่ง</h1>
                    <table  >
                <thead>
                    <tr>
                        <th>หมายเลขแผนกงาน</th>
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
                </div>
                "       ;
                
                // $insert->bind_param('ssii',$Tea_ID,$tea_type,$Quantity,$Expiration_date,$Purchase_date,$manufacturer,$Price);     
                 //$insert->execute();
                // header("Refresh:0");
                    
            ?>
 
              
             
    
</body>
</html>