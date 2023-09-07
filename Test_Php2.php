<?php
echo "Hello World!";
function OpenCon()
{
$dbhost = "db-mariadb-7930-uat-db01test.mariadb.database.azure.com";
$dbuser = "adminebrc@db-mariadb-7930-uat-db01test";
$dbpass = "5JZ`x8\D&^0pbADKR`+n";
$db = "db-mariadb-7930-uat-db01test";
$conn = new mysqli($dbhost, $dbuser, $dbpass,$dbname) or die("Connect failed: %s\n". $conn -> error);
return $conn;
echo "Hello World!";
}
function CloseCon($conn)
{
$conn -> close();
}
?>
