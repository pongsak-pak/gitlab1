<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 2px solid black;
}
</style>
</head>
<body>
<?php
$servername = "localhost";
$username = "webadmin";
$password = "1234";
$dbname = "myDB";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn ->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}

$sql = "SELECT id, firstname, lastname, email FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th><th>Email</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["firstname"]. " " . $row["lastname"]."<td> " . $row["email"]. "</td></td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}


$conn->close();
?>
<br/>
<a href="http://localhost/phpsql/insert_from.php"><input type="button" value="เพิ่มข้อมูล"></a>
</body>
</html>