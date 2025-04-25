<?php
$dbname = "sql_store";
$servername = "localhost";
$username = "RalfsEgle";
$password = "password";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$name = "";

if (isset($_POST["vards"])) {
    $name = $_POST["vards"];
}

$sql = "SELECT * FROM Orders
WHERE customer_id IN (SELECT customer_id FROM customers where first_name = '$name');";
$result = $conn->query($sql);

echo "<ul>";
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<li>" . "id: " . $row["customer_id"] . " - order id: " . $row["order_id"];
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" action="??">
        <input type="text" name="vards">
    </form>

</body>

</html>