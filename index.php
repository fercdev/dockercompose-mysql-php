<?php

$servername = "db";
$username= "root";
$password = "strongpassword123412321312";
$dbname = "test";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexion fallida". $conn->connect_error);
}

echo "Conexion satisfactoria";

?>