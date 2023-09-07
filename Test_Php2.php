<?php
echo "Hello World1";
function OpenCon()
{
$dbhost = "db-mariadb-7930-uat-db01test.mariadb.database.azure.com";
$dbuser = "adminebrc@db-mariadb-7930-uat-db01test";
$dbpass = "5JZ`x8\D&^0pbADKR`+n";
$dbname = "mysql";
$conn = new mysqli($dbhost, $dbuser, $dbpass,$dbname) or die("Connect failed: %s\n". $conn -> error);
echo "Accès OK à la base de données";
}
function CloseCon($conn)
{
$conn -> close();
}
opencon()
?>
