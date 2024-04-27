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
//$sql="SELECT * FROM `banksystem`";
//$result=mysqli_query($conn,$sql);
//$num=mysqli_num_rows($result);
//echo $num;
//echo"records found in the DataBase<br>";
//if($num>0){
  //  while($row=mysqli_fetch_assoc($result)){
    //echo $row['user_name'];
//}
//}
//usage of where clause to update data
$sample=$_REQUEST['cpin'];
$sam=$_REQUEST['npin'];
$samr=$_REQUEST['npinn'];
if($sam==$samr){
$var="SELECT `user_name` FROM `banksystem` WHERE `pin`='$sample'";
$result=mysqli_query($conn,$var);
$num=mysqli_num_rows($result);
while($row=mysqli_fetch_assoc($result)){
    $ys=$row['user_name'];
}
$sql="UPDATE `banksystem` SET `pin`=$sam WHERE `pin`='$sample'";
$result=mysqli_query($conn,$sql);
if($result){
    header("Location:v1.html");
}
else{
    echo"we could not update record successfully";
}
}
else{
    echo "please check new pin once again";
}
?>
