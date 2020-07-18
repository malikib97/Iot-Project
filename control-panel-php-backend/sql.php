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

if ($_POST["submit"]=="F"){
  $sql = "INSERT INTO `directions` (`id`, `Leftward`, `Rightward`, `Forward`, `Backwards`, `Stop`) VALUES (NULL, '', '', 'F', '', '')";

}
elseif ($_POST["submit"]== "L"){
  $sql = "INSERT INTO `directions` (`id`, `Leftward`, `Rightward`, `Forward`, `Backwards`, `Stop`) VALUES (NULL, 'L', '', '', '', '')";

}
elseif ($_POST["submit"]== "S"){
  $sql = "INSERT INTO `directions` (`id`, `Leftward`, `Rightward`, `Forward`, `Backwards`, `Stop`) VALUES (NULL, '', '', '', '', 'S')";

}
elseif ($_POST["submit"]== "B"){
  $sql = "INSERT INTO `directions` (`id`, `Leftward`, `Rightward`, `Forward`, `Backwards`, `Stop`) VALUES (NULL, '', '', '', 'B', '')";


}
elseif ($_POST["submit"]== "R"){
  $sql = "INSERT INTO `directions` (`id`, `Leftward`, `Rightward`, `Forward`, `Backwards`, `Stop`) VALUES (NULL, '', 'R', '', '', '')";

}

else { echo "not A LETTER boy ";
  }
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
