<?php
// Conexão com banco de dados

$servername = "192.168.1.12";
$username = "root";
$password = "B0d!w411";
$db_name = "cardap";

   $connect = mysqli_connect($servername, $username, $password, $db_name);
      if (mysqli_connect_error()):
         echo "Erro na conexão:".mysqli_connect_error();
      endif;

?>
