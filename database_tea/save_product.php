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
    width:200px; 
    border-radius:5px;
    border: 1px solid #777B7E;   
    display:inline-block;
    color:white;
    text-align:center; 
    background:none;
   }
   .data-form input[type="date"]{
    background:none;
    width:300px;   
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
     top:0;
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
   .data-form input[type="submit"]:hover{
    background-color: #2ecc71;
    }
    .table-sticky{ 
       width:1200px;
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
       width:1100px;
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
.data-form input {
    width:200px;
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
                        <li><a href=\"save_product.php\"><i>บันทึกข้อมูลการแปรูปใบชา</i></li>
                        <li><a href=\"search_product.php\"><i>ค้นหาข้อมูลการแแปรรูปใบชา</i></li>     
                        <li> <i> <a href=\"logout.php\">ออกจากระบบ</a> </i>                     
                    </ul>
                </div>
            </div>";
            
                $tea = $con->query("SELECT *  FROM transform ORDER BY Manufactured_date");
                $data = "";
                while($row = $tea->fetch_row()) {
                    $data .= "<tr>".
                 
                    "<td>".$row["1"]."</td>".
                    "<td>".$row["2"]."</td>".
                    "<td>".$row["3"]."</td>".
                    "<td>".$row["0"]."</td>".
                    "<td>".$row["4"]."</td>".
                    "<td>".$row["5"]."</td>".
                    "<td>".$row["6"]."</td>".
                  
                    "</tr>"
                    ;
                }
                $wrk_id = $con->query("SELECT work_station FROM cook ORDER BY work_station");
                $in_list ="";
                while($row = $wrk_id->fetch_row()) {
                    $in_list.="<option value = '".$row[0]."'></option>";
                }
                $tea_id = $con->query("SELECT Tea_ID FROM tea_leaf ORDER BY Tea_ID");
                $in_list2 ="";
                while($row = $tea_id->fetch_row()) {
                    $in_list2.="<option value = '".$row[0]."'></option>";
                }          
            echo " <div class=\"wrapper\">
                      <form class=\"data-form\" action=\"add_product.php\" method=\"POST\" >
                       
                       <h1>+ บันทึกข้อมูลการผลิตสินค้า</h1>
                       <p>
                       ระบุวันที่ผลิตสินค้า <input type=\"date\" name=\"manufactering_date\" placeholder=\"ระบุวันที่ผลิต\">              
                       วันหมดอายุของสินค้า <input type=\"date\" name=\"Expiration_date\" placeholder=\"วันหมดอายุของวัตถุดิบ\" > 
                       รหัสสินค้า <input type=\"text\" name=\"Item_ID\" placeholder=\"รหัสสินค้า\">
                       ห้องผลิตหมายเลข <input list =\"work_station\" placeholder=\"  ห้องผลิตหมายเลข\" name=\"work_station\" required autocomplete =off>
                       <datalist id =\"work_station\" >
                       ".
                       $in_list
                       ."
                       </datalist>
                       <br>
                      
                       จำนวนสินค้า <input type=\"text\" name=\"quantity\" placeholder=\" จำนวนสินค้า\">
                       ราคาต่อหนึ่งหน่วย  <input type=\"text\" name=\"price_u\" placeholder=\" ราคาต่อหนึ่งหน่วย\">
                       ชื่อสินค้า     <input type=\"text\" name=\"product_name\" placeholder=\" ชื่อสินค้า \">    
                       ผลิตจากวัตถุดิบ <input list =\"tea_leaf\" placeholder=\"  วัตถุดิบหมายเลข\" name=\"tea_leaf\" required autocomplete =off>
                       <datalist id =\"tea_leaf\" >
                       ".
                       $in_list2
                       ."
                                <br>
                                </p>        
                       <input type=\"submit\" name=\"send\" value=\"ยืนยัน\"> <br>
                       </form>
                    </div>
                
                <div class=\"table-sticky\"  style=\" overflow: scroll;overflow-x: auto;\">
                    <span class=\"fas fa-leaf\"></span> <h1>ข้อมูลสินค้า</h1>
                    <table>     
                      <thead>
                           <tr>  
                               
                                 <th>รหัสสินค้า</th>
                                 <th>ชื่อสินค้า</th>
                                 <th>ปริมาณที่ผลิต</th>
                                 <th>ห้องผลิตหมายเลข</th>  
                                 <th>วันผลิต</th>
                                 <th>วันหมดอายุ</th>
                                 <th>ราคา/หน่วย</th>
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