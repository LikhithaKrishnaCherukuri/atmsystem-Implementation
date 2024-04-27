<html>

<style>
body{

  background-image:url("1.jpg");
  background-repeat:no-repeat;
  background-size:cover;
  font-family: "Times New Roman", Times, serif;
  height: 100vh;
  text-align:center;
  font-size:40px;
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
$sample=$_REQUEST['money'];
$sam=$_REQUEST['password'];
$var="SELECT `balance` FROM `banksystem` WHERE `pin`='$sam'";
$result=mysqli_query($conn,$var);
$num=mysqli_num_rows($result);
while($row=mysqli_fetch_assoc($result)){
    $ya=$row['balance'];
}
$var="SELECT `user_name` FROM `banksystem` WHERE `pin`='$sam'";
$result=mysqli_query($conn,$var);
$num=mysqli_num_rows($result);
while($row=mysqli_fetch_assoc($result)){
    $ys=$row['user_name'];
}
if($sample>10000){
  //echo "You can only withdrawen 10000 per a day";
  header("Location: w1.html");
}
else if($ya<$sample){
  //echo "you does not have sufficient money to withdraw";
  header("Location: w2.html");
}
else{
echo "Hello ";
 echo $ys;
 echo " !!";
  echo "<br>";
  echo "<br>";
  echo "Before withdrawal, the available amount was: ";
echo $ya;
echo "/-";
 echo "<br>";
echo "Withdrawal amount:";
echo $sample;
echo "/-";
echo "<br>";
$sample=$ya-$sample;
echo "Total amount available in the account was: ";
echo $sample; 
echo "/-";
echo "<br>";

$sql="UPDATE `banksystem` SET `balance`=$sample WHERE `pin`='$sam'";
$result=mysqli_query($conn,$sql);
if($result){
    echo"we updated the record successfully";
    echo "<br>";
    echo "<br>";
    echo "THANK YOU";
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
