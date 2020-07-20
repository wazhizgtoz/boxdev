<?php
// Conexão com banco de dados
//$servername = "192.168.1.12";
//$username = "root";
//$password = "B0d!w411";
//$db_name = "cardap";

   $connect = mysqli_connect('192.168.1.12', 'root', 'B0d!w411', 'cardap');
   if (mysqli_connect_error()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

?>
