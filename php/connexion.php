<?php
$conn = new mysqli('localhost', 'root', '', 'hangukmunhwa');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>