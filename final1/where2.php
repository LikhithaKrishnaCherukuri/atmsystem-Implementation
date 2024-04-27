<html>

<style>
body{

  background-image:url("1.jpg");
  background-repeat:no-repeat;
  background-size:cover;
  height: 100vh;
  text-align:center;
  font-size:35px;
  font-family: "Times New Roman", Times, serif;
}
button{
height: 50px;
width: 150px;
font-size: 18px;
font-weight:400;
color: black;
background: peru;
outline: none;
cursor: pointer;
border: 1px solid peru;
border-radius: 25px;
transition: .4s;
margin:10px;
}
.b1{
    float:left;
}
 </style> 
  
<body> 
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
$sample=$_REQUEST['money'];
$sam=$_REQUEST['password'];
$samr=$_REQUEST['username1'];
$var="SELECT `balance` FROM `banksystem` WHERE `pin`='$sam'";
$result=mysqli_query($conn,$var);
$num=mysqli_num_rows($result);
while($row=mysqli_fetch_assoc($result)){
    $ys=$row['balance'];
}
$var="SELECT `balance` FROM `banksystem` WHERE `user_name`='$samr'";
$result=mysqli_query($conn,$var);
$num=mysqli_num_rows($result);
while($row=mysqli_fetch_assoc($result)){
    $yr=$row['balance'];
}
if($sample>$ys){
    header("Location: w1.html");
    //echo "You does not have sufficient amount to transfer";
}
//echo $ys;
//echo $yr;
else{
$sampler=$sample+$yr;
//echo $sampler;
$samples=$ys-$sample;
//echo $samples;
?>
<img src="2.jpg"  height=150px width=200px alt="correct sign">
<?php
echo "<br>";
echo"<br>";
echo "Successfully ";
echo $sample;
echo "/-";
echo " rupees was transferred to  ";
echo $samr;
echo "<br>";
echo "<br>";
$sql="UPDATE `banksystem` SET `balance`=$samples WHERE `pin`='$sam'";
$result=mysqli_query($conn,$sql);
if($result){
    echo"we updated the record successfully";
    echo "<br>";
}
else{
    echo"we could not update record successfully";
}
$sql="UPDATE `banksystem` SET `balance`=$sampler WHERE `user_name`='$samr'";
$result=mysqli_query($conn,$sql);
if($result){
    //echo"we updated the record successfully";
    echo "<br>";
}
else{
    echo"we could not update record successfully";
}
}
?>
<a href="choose.html"><button class="b1">back</button></a>
</body>
</html>
