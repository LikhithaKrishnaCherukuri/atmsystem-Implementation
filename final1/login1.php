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
    //echo $row['user_name']." ".$row['Pin']." ".$row["Balance"]."<br>";
    $username[$row['user_name']] = $row['pin'];
    }
  }
else {
  echo "0 results";
}
if($username[$_REQUEST['username']] == $_REQUEST['password']){
    ?>
<div style="background-image:1.jpg">
   <h1><?php echo $_REQUEST['money']?></h1>
    <p> </p>
    <h2> successfully withdrawn</h2>
</div>
<?php}else{
    echo "not correct";
    //header("Location: withd.html");
}
$conn->close();
}
?>