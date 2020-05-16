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
   .wrapper span{
     float:left;
     font-size:16px;
     padding:5px 5px;
     color:#fed130;   
    }
   .data-form{
       
       position:relative;
       background:transparent;    
       font-size:16px;       
       padding:5px 10px;
       color:white;
    }
   
   .data-form h1{
     top :0;
     font-size:18px;
     padding:5px 10px;
     color:#fed130;
   }
   .data-form p{
     margin-left:60px;
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
   .data-form input[type="text"]{
    width:200px; 
    border-radius:5px;
    border: 1px solid #777B7E;   
    display:inline-block;
    color:white;
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
   .data-form input[type="submit"]:hover{
    background-color: #2ecc71;
    }
    .table-sticky{ 
       width:1200px;
       height:600px;
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
                $in_list ="";
                $acc= $con->query("SELECT User_name FROM account");
                 while($row = $acc->fetch_row()){
                    $in_list.="<option value = ".$row[0]."></option>"; 
                 }
                 $data ="";
                 $acc_profile = $con->query("SELECT User_name ,Login_time,Status 
                 FROM account
                 ");  
                    while($row = $acc_profile->fetch_row()){
                    $data .= "<tr>".
                    "<td>".$row["0"]."</td>".
                    "<td>".$row["1"]."</td>".
                    "<td>".$row["2"]."</td>".
                    "</tr>"
                    ;
                  }                 

                echo "<div class=\"blurred-box\">
                <div class = \"sidebar\">
                        <img src=\"logo.png\" width=\"100\">
                        <img src=\"profile.png\"> 
                        <div class = \"name\">
                        <h1>".$out['Name']."<br>".$out['Department_name']."              
                        </h1>
                       </div>
                        <ul>
                        <li><a href=\"add_new_emp.php \"><i> เพิ่มข้อมูลของพนักงานใหม่ </i></li>
                        <li><a href=\"del_emp.php \"><i> ลบข้อมูลของพนักงาน </i></li>
                        <li><a href=\"index_edit_emp.php \"><i> แก้ไขข้อมูลของพนักงาน </i></li>
                        <li><a href=\"edit_acc.php \"><i> แก้ไขข้อมูลบัญชีในระบบ </i></li>       
                        <li> <i> <a href=\"logout.php\">ออกจากระบบ</a> </i>                     
                    </ul>
                </div>
            </div>
            <div class=\"wrapper\">
                     
                      <form class=\"data-form\" action=\"edit_acc_imp.php\" method=\"POST\" >   
                      <span class=\"fas fa-wrench\"> </span> 
                      <h1>แก้ไขบัญชีการเข้าถึง</h1>
                     <p>
                      บัญชีผู้ใช้ <input list =\"dept_id\" placeholder=\" บัญชีผู้ใช้ \" name=\"acc_id\" required autocomplete =off>
                       <datalist id =\"dept_id\" >
                       ".
                       $in_list
                       ."
                       </datalist>
                       รหัสผ่าน <input type=\"text\" name=\"pass\" placeholder=\"รหัสผ่าน\">
                       <br>
                       </p>
                       <input type=\"submit\" name=\"send\" value=\"ยืนยัน\"> <br>
                       </form>
                    </div>
                    
                    <div class=\"table-sticky\" style=\" overflow: scroll;overflow-x: auto; \">
                    <span class=\"fas fa-user\"></span> <h1>ข้อมูลหัวหน้าแผนกงานงาน</h1>
                    <table  >
                <thead>
                    <tr>
                        <th>รหัสผู้ใช้</th>
                        <th>เวลาเข้าใช้งาน</th>
                        <th>สถานะการใช้งาน</th>
                    </tr>
                </thead>
                <tbody>
                   ".
                   $data
                   .
                   "
                </tbody>
                    </table>
                    </div>
            "
            ;
           
        ;
                    
            ?>
 
              
             
    
</body>
</html>