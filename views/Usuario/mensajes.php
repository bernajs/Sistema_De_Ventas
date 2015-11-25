<?php
$con=mysqli_connect("localhost","root","1234","chatajax");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
$result = mysqli_query($con,"SELECT * FROM mensaje");

while($row = mysqli_fetch_array($result))
  {
  echo "<b>".$row['usuario']."</b>: ".$row['contenido'];
  echo "<hr>";
  }

mysqli_close($con);


?>