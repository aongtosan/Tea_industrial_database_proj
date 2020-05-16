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
       height:90px;
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
    font-size:18px;  
    padding:5px 10px;
    color:#2ecc71;
   }
   .data-form span{
    font-size:16px;  
    padding:5px 10px;
    color:#2ecc71;
   }
   .data-form input[type="text"]{
    width:150px; 
    border-radius:5px;
    border: 1px solid #777B7E;   
    display:inline-block;
    color:white;
    text-align:center; 
    background:none;
   }
   .data-form input[type="date"]{
    background:none;
    width:150px;   
    height:16px; 
    border-radius:5px;
    border: 1px solid #777B7E;   
    display:inline-block;
    color:#2ecc71;
    text-align:center; 
   }
   .data-form input[type="submit"]{
     position:relative;
     top:10px;
     left:1000px;
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

   .data-form input[type="submit"]:hover{
    background-color: #2ecc71;
    }
    .table-sticky{ 
       width:1200px;
       height:570px;
       position:relative;
       top:130px;
       left:20% ;
       box-shadow: inset 0 0 0 1000px rgba(53,53,53,0.8);
       filter: blurr(10px)  

    }
    .table-sticky h1 {
     font-size:18px;
     padding:10px 20px;
     color:#2ecc71;
    }
    .table-sticky span{
     float:left;
     font-size:18px;
     padding:15px 10px;
     color:#2ecc71;   
     
    }
    .table-sticky table{
       position:relative;
       left:5px; 
       font-size:16px;
       width:1100px;
       height:500px;
    }
    .table-sticky table thead{
        text-align:center;
        padding:5px 10px;
        background:#2ecc71;
        border:1px solid black;
    }
    .table-sticky table thead th{
       width:120px;
       border-radius:24px;
       top:12px;
       position:sticky;
       background#2ecc71;
       
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
.data-form input {
    width:150px;
    height:18px;    
    border-radius:5px;
    border: 1px solid #777B7E;   
    display:inline-block;
    text-align:center;
    background:none; 
    max-width: 150px;
    color:#2ecc71;
   }
   .data-form p{
   
   margin-left:60px;
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
    background: -webkit-gradient(linear,left top,left bottom,from(#66cc00), to(#049b4b));
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
            
            $hist = $con->query("SELECT Car_ID,send.Compan_ID,Company_Name,Product_ID,Product_Name,Quantity,price, Send_date
                                FROM 
                                send 
                                inner join transform on
                                transform.Item_ID = send.Product_ID
                                inner join customer on customer.Compan_ID = send.Compan_ID
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
            $car_id = $con->query("SELECT Car_ID FROM transportation ORDER BY Car_ID");
            $in_list ="";
            while($row = $car_id->fetch_row()) {
                $in_list.="<option value = ".$row[0]."></option>";
            }    
            $com_id = $con->query("SELECT Compan_ID FROM customer ORDER BY Compan_ID");
            $in_list2 ="";
            while($row = $com_id->fetch_row()) {
                $in_list2.="<option value = '".$row[0]."'></option>";
            }     
            $item_id = $con->query("SELECT Item_ID FROM transform ORDER BY Item_ID");
            $in_list3 ="";
            while($row = $item_id->fetch_row()) {
                $in_list3.="<option value = '".$row[0]."'></option>";
            }         
                        
            echo " <div class=\"wrapper\">
                      <form class=\"data-form\" action=\"send_his_imp.php\" method=\"POST\" >
                       
                       <h1> +  บันทึกประวัติการส่งสินค้า </h1>
                       <p>
                  
                       รหัสรถขนส่ง <input list =\"car_id\" placeholder=\" รหัสรถขนส่ง\" name=\"car_id\" required autocomplete =off>
                       <datalist id =\"car_id\" >
                       ".
                       $in_list
                       ."
                       </datalist>
                       รหัสอ้างอิงลูกค้า <input list =\"com_id\" placeholder=\" รหัสอ้างอิงลูกค้า\" name=\"com_id\" required autocomplete =off>
                       <datalist id =\"com_id\" >
                       ".
                       $in_list2
                       ."
                       </datalist>
                       รหัสสินค้า <input list =\"item_id\" placeholder=\" รหัสสินค้า\" name=\"item_id\" required autocomplete =off>
                       <datalist id =\"item_id\" >
                       ".
                       $in_list3
                       ."
                       </datalist>
                       วันที่ขนส่งสินค้า <input type=\"date\" placeholder=\"  วันที่ขนส่งสินค้า \" name=\"deli_date\" required autocomplete =off> 
                       <input type=\"submit\" name=\"send\" value=\"ยืนยัน\"> <br>
                       </form>
                    </div>
                    <div class=\"table-sticky\"  style=\" overflow: scroll;overflow-x: auto;\">
                    <span class=\"fas fa-shopping-cart\"></span> <h1>ประวัติการส่งสินค้า</h1>
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
                "       ;
             
               
           ?>
           
           
              
             
    
</body>
</html>