<html>
<head></head>
<body>
    <table border="1">
<?php
$conn= mysqli_connect("localhost","root","","collage");
if($conn->connect_error)
  {
    die("mysql connection error");
  }

  $query ="select* from students";
  $result ="$conn->query($query)";
  while($row= $result->fetch_assoc()){
echo"<tr>";

      echo"<td>";
      echo $row['name'];
      echo"</td>";

      echo"<td>";
      echo $row['email'];
      echo"</td>"; 
      
      echo"<td>";
      echo $row['phone'];
      echo"</td>";

      echo"<td>";
      echo $row['adress'];
      echo"</td>";

 echo"</tr>";
  }
?>


    </table>
</body>




</html>

