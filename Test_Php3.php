<?php
echo "Hello World1";
function OpenCon()
{
$dbhost = "mdbsrv-002.mariadb.database.azure.com";
$dbuser = "admineos+@mdbsrv-002";
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
