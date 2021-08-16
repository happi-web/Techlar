<?php
  $servername="localhost";
  $dbUsername="root";
  $dbPassword="konmate@1993";
  $dbName="konmate";
  $conn=mysqli_connect($servername,$dbUsername,$dbPassword,$dbName);
  if (! $conn){
    die("Connection Failed :".mysqli_connect_error());
  }
 ?>
