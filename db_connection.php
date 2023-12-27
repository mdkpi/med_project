<?php

$host = 'sql113.byethost16.com';
$db_name = 'b16_35677726_medical';
$db_user = 'b16_35677726'; 
$db_pass = '1WQ21!2@d';

$connect = mysqli_connect($host, $db_user, $db_pass, $db_name);

if (!$connect) {
  die("Помилка піключення: " . mysqli_connect_error());
}

return $connect;

?>