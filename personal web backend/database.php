<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "message_me";

$db = new mysqli($servername, $username, $password, $dbname);

if ($db->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
