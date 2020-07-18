<!DOCTYPE html>
<html>
<body>
  <body style="background-color:powderblue;">

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "directions";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, Leftward, Rightward, Forward, Backwards, Stop FROM directions
order by 1 DESC
Limit 1
 ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo $row['Leftward'].$row["Rightward"].$row["Forward"].$row["Backwards"].$row["Stop"];
 // echo " $row["id"] $row["Leftward"] $row["Rightward"] $row["Forward"]$row["Backwards"]$row["Stop"] <br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
