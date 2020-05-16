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
    color:#BBFFFF;
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
       height:25    0px;
       position:fixed;
       top:150px;
       left:20% ;
       box-shadow: inset 0 0 0 1000px rgba(53,53,53,0.8);
       filter: blurr(10px)  

    }
    .table-sticky h1 {
     font-size:18px;
     padding:10px 20px;
     color:#BBFFFF;
    }
    .table-sticky span{
     float:left;
     font-size:18px;
     padding:15px 10px;
     color:#BBFFFF;   
     
    }
    .table-sticky table{
       position:relative;
       left:5px; 
       font-size:16px;
       width:1100px;
       height:200px;
    }
    .table-sticky table thead{
        text-align:center;
        padding:5px 10px;
        background:#BBFFFF;
        border:1px solid black;
    }
    .table-sticky table thead th{
       width:120px;
       border-radius:24px;
       top:12px;
       position:sticky;
       background#BBFFFF;
       
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
    color:#BBFFFF;;
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
            
                $tea = $con->query("SELECT *  FROM transform ");
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
                $item_id = $con->query("SELECT Item_ID FROM transform ORDER BY Item_ID");
                $in_list ="";
                while($row = $item_id->fetch_row()) {
                    $in_list.="<option value = '".$row[0]."'></option>";
                }         
            echo " <div class=\"wrapper\">
                      <form class=\"data-form\" action=\"find_product.php\" method=\"POST\" >
                       
                       <h1> <span class=\"fa fa-search\"> <span> บันทึกข้อมูลการผลิตสินค้า </h1>
                       <p>
                       รหัสสินค้า <input list =\"Item_id\" placeholder=\"  ห้องผลิตหมายเลข\" name=\"Item_id\" required autocomplete =off>
                       <datalist id =\"Item_id\" >
                       ".
                       $in_list
                       ."
                       </datalist>
                       <input type=\"submit\" name=\"send\" value=\"ยืนยัน\"> <br>
                       </form>
                    </div>
                "       ;
                if(isset($_POST['Item_id'])){
                    $Item_id = "'".$_POST['Item_id']."'";
                    $check ="SELECT Item_ID FROM transform where Item_ID = ".$Item_id;
                    mysqli_query($con,$check);
                     $count = mysqli_affected_rows($con);
                      
                     if($count>0 ){
                         $data ="";
                         $check ="SELECT transform.Item_id,transform.Product_Name,transform.Quantity,transform.station,transform.Manufactured_date,
                         transform.Expiration_date,transform.Price,department.Department_manager_id,material.Tea_ID FROM transform 
                         inner join cook on transform.station = cook.work_station
                         inner join department on department.Department_id = cook.Department_id 
                         inner join material on material.Item_ID = transform.Item_ID 
                         where transform.Item_ID = ".$Item_id;
                         $product = $con->query($check);  
                         while($row = $product->fetch_row()) {
                            $data .= "<tr>".
                         
                            "<td>".$row["0"]."</td>".
                            "<td>".$row["1"]."</td>".
                            "<td>".$row["2"]."</td>".
                            "<td>".$row["3"]."</td>".
                            "<td>".$row["4"]."</td>".
                            "<td>".$row["5"]."</td>".
                            "<td>".$row["6"]."</td>".
                            "<td>".$row["7"]."</td>".
                            "<td>".$row["8"]."</td>".
                            "</tr>"
                            ;
                        }

                     echo"     <div class=\"table-sticky\"  style=\" overflow: scroll;overflow-x: auto;\">
                     <span class=\"fas fa-search\"></span> <h1>ข้อมูลสินค้า</h1>
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
                                  <th>ผู้ดูแลการผลิต</th>
                                  <th>วัตถุดิบ</th>
                            </tr>
                        </thead>
                       <tbody>
                       "
                       . 
                       $data
                       .
                       "
                       </tbody>                   
                     </table>
                 </div>";
                     }else{
                       
                        echo "<script>";
                        echo "alert(\"เกิดข้อผิดพลาด ไม้มีสินค้าดังกล่าวอยู่ในระบบ\");"; 
                        echo "header(location: search_product.php)";
                        echo "</script>"; 
                           
                     }
                }
           
           ?>
           
           
              
             
    
</body>
</html>