<?php
$dbname = "sql_store";
$servername = "localhost";
$username = "RalfsEgle";
$password = "password";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT orders.order_id , customers.first_name , customers.last_name , customers.customer_id
        from customers
        join orders on orders.customer_id = customers.customer_id;";
$result = $conn->query($sql);

echo "<ul>";
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<li>" . "id: " . $row["customer_id"] . " - Name: " . $row["first_name"] . " - Surname: " . $row["last_name"] . " - order id: " . $row["order_id"];
    }
}
