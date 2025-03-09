<?php
$host = "localhost";
$user = "root"; // Par défaut sous XAMPP
$password = "";
$dbname = "school_db";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
}
?>