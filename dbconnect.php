<?php

$host="localhost";
$username="root";
$password="imroot";
$db_name="intersources_db";

mysql_connect("$host", "$username", "$password") or die ("Hello ,sorry we cannot connect...");

// if(mysql_connect_errno()) {
//             die("MySQL connection failed: ". mysql_connect_error());
//         }

mysql_select_db("$db_name") or die ("Hello ");


?>