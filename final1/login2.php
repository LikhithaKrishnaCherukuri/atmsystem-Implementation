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
    $sample=$_REQUEST['money'];
    //$sql="UPDATE `banksystem` SET `balance`=500 WHERE `user_name`=$_REQUEST['username']";
    //$result=mysqli_query($conn,$sql);

    //$bal="SELECT * FROM banksystem WHERE `user_name`=$_REQUEST['username']";
    //$var=$conn->query($bal);
    //$var1=$var->fetch_assoc();
    
    //echo $var1['balance'];
    echo $sample;
    
    echo " ";
    echo "successfully deposited";
    $var=$_REQUEST['username'];
    echo $var;
    $sql="UPDATE `banksystem` SET `balance`=$sample WHERE 'user_name'='$var'";
    $result=mysqli_query($conn,$sql);
    //header("Location: welcome.html");
}else{
    echo "not correct";
    //header("Location: withd.html");
}
$conn->close();
?>