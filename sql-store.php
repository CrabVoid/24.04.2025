<?php

$dbname = "sql_store";
$servername = "localhost";
$username = "RalfsEgle";
$password = "password";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "select * from customers";
$result = $conn->query($sql);

echo "<ul>";
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<li>" . "id: " . $row["customer_id"] . " - Name: " . $row["first_name"] . " - Surname: " . $row["last_name"];
    }
}
