<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$username = array();
$sql = "SELECT * FROM banksystem";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $username[$row['user_name']] = $row['pin'];
    }
  }
else {
  echo "0 results";
}
if($username[$_REQUEST['username']] == $_REQUEST['password']){
        header("Location: welcome.html");
}else{
    header("Location: index1.html");
}
$conn->close();
?>