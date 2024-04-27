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
else{
  echo "connection was successful<br>";
}
$sql="SELECT * FROM `banksystem`";
$result = mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);
echo $num;
echo "<br>";
if($num>0)
{
  //we can fetch in a better way using the while loop
  while($row=mysqli_fetch_assoc($result)){
    if($row['user_name']==$_REQUEST['username']){
      echo $row['user_name'];
      echo $_REQUEST['username'];
      header("Location: welcome.html");
    }
    //echo var_dump($row);
    echo "<br>";
  }
}
/*$result = $conn->query($sql);

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
if($username[$_REQUEST['username']] == $_REQUEST['username']){
    //header("Location: welcome.html");
    echo $row['username'];
}else{
    header("Location: withd.html");
}
$conn->close();*/

?>
