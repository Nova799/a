<?php
// Connexion à la base de données
// function conn(){
//     return mysqli_connect("localhost", "root", "", "formulaire");
// };

// vARIABLE GLOBAL
$email_send = "info@cinef-bj.com";
$numero_tel = "+229 63 18 60 60";
$siege_societe = "St Rita, Cotonou, BENIN";

$host = "localhost";
$userName = "terry";
$password = "0156";
$dbName = "formulaire";
// Create database connection
$conn = new mysqli($host, $userName, $password, $dbName);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}


?>