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
       width:1100px;
       background:inherit;
       height:100px;
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
    width:100px;   
    height:16px; 
    border-radius:5px;
    border: 1px solid #777B7E;   
    display:inline-block;
    color:#2ecc71;
    text-align:center; 
   }

   .data-form select{
    width:100px;
    height:18px;    
    border-radius:5px;
    border: 1px solid #777B7E;   
    display:inline-block;
    color:#2ecc71;
    text-align:center;
    background:none; 
   }
   
   .data-form input[type="submit"]{
     position:relative;
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
       width:1100px;
       height:590px;
       position:fixed;
       top:150px;
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
       width:1000px;
       height:490px;
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
       background:#2ecc71;
       
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
                        <li><a href=\"buy_tea.php\"><i>บันทึกข้อมูลการซื้อใบชา</i></li>          
                        <li> <i> <a href=\"logout.php\">ออกจากระบบ</a> </i>                     
                    </ul>
                </div>
            </div>";
            
                $tea = $con->query("SELECT * FROM tea_leaf ORDER BY  Type ,Purchase_date ,Price");
                $data = "";
                while($row = $tea->fetch_row()) {
                    $data .= "<tr>".
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
                      <form class=\"data-form\" action=\"add_tea_leaf.php\" method=\"POST\" >
                       <h1>+ บันทึกข้อมูลการซื้อวัตถุดิบ</h1>
                       ระบุวันที่ซื้อ <input type=\"date\" name=\"Purchase_date\" placeholder=\"ระบุวันที่ซื้อ\">
                       <input type=\"text\" name=\"Quantity\" placeholder=\"ปริมาณการสั่งซื้อ\" >
                       <input type=\"text\" name=\"Price\" placeholder=\"ราคาวัตถุดิบ\" >
                        ชนิดของใบชา <select id=\"type\" name=\"tea_type\">
                       <option value=\"WHTE\">ใบชาขาว</option>
                       <option value=\"GREN\">ใบชาเขียว</option>
                       <option value=\"BLCK\">ใบชาดำ</option>
                       <option value=\"OLON\">ใบชาอู่หลง</option>
                       </select>
                       วันหมดอายุของวัตถุดิบ <input type=\"date\" name=\"Expiration_date\" placeholder=\"วันหมดอายุของวัตถุดิบ\" ><br>
                       แหล่งผลิต  <input type=\"text\" name=\"house_id\" placeholder=\"บ้านเลขที่\">
                                <input type=\"text\" name=\"vil\" placeholder=\"หมู่บ้าน\">
                                <input type=\"text\" name=\"city\" placeholder=\"ตำบล,อำเภอ\">    
                                <input type=\"text\" name=\"province\" placeholder=\"จังหวัด,รหัสไปรษณีย์\">
                                รหัสสินค้า <input type=\"text\" name=\"Tea_ID\" placeholder=\"รหัสสินค้า\">
                                <br>
                       <input type=\"submit\" name=\"send\" value=\"ยืนยัน\"> <br>
                       </form>
                    </div>
                
                <div class=\"table-sticky\"  style=\" overflow: scroll;overflow-x: auto;\">
                    <span class=\"fas fa-leaf\"></span> <h1>ข้อมูลใบชา</h1>
                    <table>     
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
                         ".$data.    
                         " 
                      </tbody>                   
                    </table>
                </div>
                "       ;
                    
            ?>
 
              
             
    
</body>
</html>