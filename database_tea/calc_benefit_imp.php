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
       height:150px;
       position:fixed;
       top:15px;
       left:20% ;
       box-shadow: inset 0 0 0 200px rgba(53,53,53,0.8);
       filter: blurr(10px)   
   }
   .data-form{
       background:transparent;    
       font-size:14px;       
       padding:5px 10px;
       color:white;
    }
   .data-form h1{
    font-size:18px;  
    padding:5px 10px;
    color:#FF846A;
   }
   .data-form p{
   
     margin-left:60px;
   }
   .data-form p p{
    position:absolute;
    margin-left:60px;
 }

  
    .table-sticky h1 {
     font-size:18px;
     padding:10px 20px;
     color:#FF846A;
    }
    .table-sticky  span{
     float:left;
     font-size:18px;
     padding:15px 10px;
     color:#FF846A;
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
        background-color:#FF846A;
        border:1px solid black;
    }
    .table-sticky  table thead th{
        width:120px;
        height:30px;
       border-radius:24px;
       top:12px;
       position:sticky;
       font-size:14px;
       background-color:#FF846A;
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
 .table-sticky{ 
       width:1200px;
       height:250px;
       position:fixed;
       top:180px;
       left:20% ;
       box-shadow: inset 0 0 0 1000px rgba(53,53,53,0.8);
       filter: blurr(10px)  
    }
    .table-sticky h1 {
     font-size:18px;
     padding:10px 20px;
     color:#FF846A;
    }
    .table-sticky  span{
     float:left;
     font-size:18px;
     padding:15px 10px;
     color:#FF846A;
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
        background-color:#FF846A;
        border:1px solid black;
    }
    .table-sticky  table thead th{
        width:120px;
        height:30px;
       border-radius:24px;
       top:12px;
       position:sticky;
       font-size:14px;
       background-color:#FF846A;
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

    .table-sticky2{ 
       width:1200px;
       height:250px;
       position:fixed;
       position:;
       top:450px;
       left:20% ;
       box-shadow: inset 0 0 0 1000px rgba(53,53,53,0.8);
       filter: blurr(10px)  
    }
    .table-sticky2 h1 {
     font-size:18px;
     padding:10px 20px;
     color:#FF846A;
    }
    .table-sticky2  span{
     float:left;
     font-size:18px;
     padding:15px 10px;
     color:#FF846A;
    }
    .table-sticky2  table{
       position:relative;
       left:10px; 
       font-size:16px;
       width:1100px;
       height:450px;
    }
    .table-sticky2 table thead{
        text-align:center;
        padding:5px 10px;
        background-color:#FF846A;
        border:1px solid black;
    }
    .table-sticky2  table thead th{
        width:120px;
        height:30px;
       border-radius:24px;
       top:12px;
       position:sticky;
       font-size:14px;
       background-color:#FF846A;
    }
    .table-sticky2  table tbody{
        text-align:center;
        padding:2px 3px;
        border:1px solid black;
        color:white;
        font-size:12px;
        display: table-row-group;
        height:300px;
    }
     .back a{
        z-index:3;
        position:fixed;
        height:30px;
        weight:150px;
        left:55%;
        top:705px;
        color:white;
        background-color:#191919;
        display:block;
        border-radius:24px;
        padding:5px 15px
     }
     .back a:hover{
        background-color: #FF846A;
        color:black;
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
    background: -webkit-gradient(linear,left top,left bottom,from(#FF846A), to(#F756));
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
                        <li><a href=\"calc_cost.php \"><i>คำนวณรายจ่ายของโรงงาน</i></li>
                        <li><a href=\"calc_benefit.php\"><i>คำนวณกำไรจากสินค้า</i></li>     
                        <li> <i> <a href=\"logout.php\">ออกจากระบบ</a> </i>  
                                           
                    </ul>
                </div>
            </div>";
                
            $tea = $con->query("SELECT * FROM tea_leaf where Purchase_date like'".$_POST['year']."-%%-%% ' ORDER BY  Type ,Purchase_date ,Price");
            $data0 = "";
            while($row = $tea->fetch_row()) {
                $data0 .= "<tr>".
                "<td>".$row["0"]."</td>".
                "<td>".$row["1"]."</td>".
                "<td>".$row["2"]."</td>".
                "<td>".$row["3"]."</td>".
                "<td>".$row["4"]."</td>".
                "<td>".$row["5"]."</td>".
                "<td>".$row["6"]."</td>".
                "</tr>"
                ;
            }
            $hist = $con->query("SELECT Car_ID,send.Compan_ID,Company_Name,Product_ID,Product_Name,Quantity,price, Send_date
                                FROM 
                                send 
                                inner join transform on
                                transform.Item_ID = send.Product_ID
                                inner join customer on customer.Compan_ID = send.Compan_ID
                                WHERE Send_date like'".$_POST['year']."%'
                                ORDER BY Send_date DESC");
            $data = "";
            while($row = $hist->fetch_row()) {
                $data .= "<tr>".
                "<td>".$row["0"]."</td>".
                "<td>".$row["1"]."</td>".
                "<td>".$row["2"]."</td>".
                "<td>".$row["3"]."</td>".
                "<td>".$row["4"]."</td>".
                "<td>".$row["5"]."</td>".
                "<td>".$row["6"]*$row["5"]."</td>".
                "<td>".$row["7"]."</td>".
                "</tr>"
                ;
            }
                $salary =  $con->query("SELECT SUM(Salary) FROM employee ");
                $year=0;
                while($row = $salary->fetch_row()) {
                    $year = ($row[0]*12);
                }
                $cost =  $con->query("SELECT SUM(Price) FROM tea_leaf WHERE Purchase_date like '".$_POST['year']."%'");
                $money =0;
                while($row = $cost->fetch_row()) {
                    $money = $row[0];
                }
                if($money==null) $money =0;
                $box =  $con->query("SELECT sum(Quantity*price)
                FROM 
                send 
                inner join transform on
                transform.Item_ID = send.Product_ID
                inner join customer on customer.Compan_ID = send.Compan_ID
                WHERE Send_date like'".$_POST['year']."%'
               ");
                $income =0;
                while($row = $box->fetch_row()) {
                    $income= $row[0];
                }
                if($income==null) $income =0;
                $result="";
                $profit=$income-($year+$money);
                if($profit>0){
                    $result="<span style=\"margin-left: 60px;color:#2ecc71\"> + กำไรจากการขายสินค้า</span>
                    <span style=\"margin-left: 245px;color:#2ecc71\">".$profit." บาท</span><br>";
                }else{
                    $result="<span style=\"margin-left: 60px;color:#FF846A\"> - ขาดทุนจากการขายสินค้า</span>
                    <span style=\"margin-left: 230px;color:#FF846A\">".(-$profit)." บาท</span><br>";
               
                }
                $hist = $con->query("SELECT * FROM `tea_leaf` WHERE `Purchase_date` LIKE '".$_POST['year']."-%%-%%%'
                ORDER BY  Type ,Purchase_date ,Price
                ");
                    $data0 = "";
                    while($row = $hist->fetch_row()) {
                        $data0 .= "<tr>".
                        "<td>".$row["0"]."</td>".
                        "<td>".$row["1"]."</td>".
                        "<td>".$row["2"]."</td>".
                        "<td>".$row["3"]."</td>".
                        "<td>".$row["4"]."</td>".
                        "<td>".$row["5"]."</td>".
                        "<td>".$row["6"]."</td>".
                        "</tr>"
                ;
            }

            echo " <div class=\"wrapper\">
                      <form class=\"data-form\" action=\"calc_benefit_imp.php\" method=\"POST\"  >
                       <h1>ค่าใช้จ่ายโดยรวมของโรงงาน</h1>
                      <p> 
                      <span style=\"color:#fed130\">คำนวนกำไรจากรายได้ประจำปี ".($_POST['year']+543)."</span><br>
                                    <p>
                                            <span style=\"margin-left: 60px;color:#fed130\">ค่าใช้จ่ายในการสั่งซื้อใบชา</span> 
                                            <span style=\"margin-left: 235px;color:#fed130\">".$money." บาท</span><br>
                                            <span style=\"margin-left: 60px;color:#fed130\">ค่าใช้จ่ายเงินเดือนพนักงานต่อปี </span>  
                                            <span style=\"margin-left: 200px;color:#fed130\">".$year." บาท</span><br>
                                            <span style=\"margin-left: 60px;color:#fed130\"> รายได้จากการสินค้า</span>
                                            <span style=\"margin-left: 270px;color:#fed130\">".$income." บาท</span><br>
                                            ".$result."
                                    </p>
                      </p>
                    
                       </form>
                    </div>
                    
                <div class=\"table-sticky\" style=\" overflow: scroll;overflow-x: auto; \">
                    <span class=\"fas fa-truck\"></span> <h1>ข้อมูลการส่งมอบสินค้า ประจำปีพุทธศักราช ".($_POST['year']+543)."</h1>
                    <table>
                <thead>
                    <tr>
                    <th>รหัสรถขนส่งสินค้า</th>
                    <th>รหัสอ้างอิงลูกค้า</th>
                    <th>ลูกค้า</th>
                    <th>รหัสสินค้า</th>
                    <th>ชื่อสินค้า</th>
                    <th>จำนวนสั่งซื้อ</th>
                    <th>มูลค่า</th>
                    <th>วันจัดส่งสินค้า</th>
                    </tr>
                </thead>
                <tbody>
                ".$data.
                " 
                </tbody>
                    </table>
                    </div>
                    
                <div class=\"table-sticky2\" style=\" overflow: scroll;overflow-x: auto; \">
                    <span class=\"fas fa-leaf\"></span> <h1>ข้อมูลการสั่งซื้อใบชา ประจำปีพุทธศักราช ".($_POST['year']+543)."</h1>
                    <table  >
                <thead>
                    <tr>
                    <th>รหัสวัตถุดิบ</th>
                    <th>ชนิดใบชา</th>
                    <th>ปริมาณที่สั่งซื้อ</th>
                    <th>วันหมดอายุ</th>
                    <th>วันสั่งซื้อ</th>
                    <th>แหล่งผลิต</th>
                    <th>ราคา</th>
                    </tr>
                </thead>
                <tbody>
                ".$data0.
                " 
                </tbody>
                    </table>
                   
                    </div>
                 
                <div class=\"back\">
                <a href =\"calc_benefit.php\">  ย้อนกลับ  </a>
                </div>
                "       ;
                
                // $insert->bind_param('ssii',$Tea_ID,$tea_type,$Quantity,$Expiration_date,$Purchase_date,$manufacturer,$Price);     
                 //$insert->execute();
                // header("Refresh:0");
                    
            ?>
 
              
             
    
</body>
</html>