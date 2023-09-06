<?php
$link = mysqli_connect('{db-mariadb-7930-uat-db01test.mariadb.database.azure.com}', '{adminebrc@db-mariadb-7930-uat-db01test}', '{5JZ`x8\D&^0pbADKR`+n}', '{db-mariadb-7930-uat-db01test}');
//if connection is not successful you will see text error
if (!$link) {
       die('Could not connect: ' . mysql_error());
}
//if connection is successfully you will see message below
echo 'Connected successfully';
 
mysqli_close($link);
?>