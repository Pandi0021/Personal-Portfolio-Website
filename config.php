<?php 
// DB credentials.
define('DB_HOST','localhost');
define('DB_USER','id20319582_pandi');
define('DB_PASS','IBvFm^J(=Nj()wN9');
define('DB_NAME','id20319582_ppw');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>