<?php
$servername = "localhost";
$username = "visaruth";
$password = "12345678";
$db_name = "agents";
// Create connection
$bond = new mysqli($servername, $username, $password,$db_name);

// Check connection
if ($bond->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
  $student = $bond->query("SELECT * from student");
?>
<!DOCTYPE html>
<head>
 <title>
     Lap Assignment 3.3
 </title>
</head>
<body>
    <table class ="table">
      <tr>
          <th scope="col">Name</th>
          <th scope="col">Title</th>
          <th scope="col">Class</th>
          <th scope="col">Section</th>
          <th scope="col">RollID</th>
      </tr>     
    </table>
    <tbody>
        <?php
            while($read = $student->fetch_assoc()){
                echo "<tr>";
                echo "<td>".$read['NAME']."</td>";
                echo "<td>".$read['TITLE']."</td>";
                echo "<td>".$read['CLASS']."</td>";
                echo "<td>".$read['SECTION']."</td>";
                echo "<td>".$read['ROLLID']."</td>";
                echo "</tr>";
            }
        ?>
    </tbody>
</body>

</html>