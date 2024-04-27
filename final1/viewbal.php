<html>

<style>
body{

  background-image:url("1.jpg");
  background-repeat:no-repeat;
  background-size:cover;
  height: 100vh;
  text-align:center;
  font-size:40px;
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
$sample=$_REQUEST['password'];
$var="SELECT `balance` FROM `banksystem` WHERE `pin`='$sample'";
$result=mysqli_query($conn,$var);
$num=mysqli_num_rows($result);
while($row=mysqli_fetch_assoc($result)){
    $ya=$row['balance'];
}
$var="SELECT `user_name` FROM `banksystem` WHERE `pin`='$sample'";
$result=mysqli_query($conn,$var);
$num=mysqli_num_rows($result);
while($row=mysqli_fetch_assoc($result)){
    $yu=$row['user_name'];
}
echo "<br>";
echo "<br>";
echo "<br>";echo "Hello ";echo $yu;
echo "  !!!";echo "<br>";
echo "Your Current balance is ";echo $ya;echo "/-";echo "<br>";echo "<br>";echo "<br>";
 #echo "<br>";
 echo "THANK YOU";
 echo "<br>";
?>
<a href="choose.html"><button class="b1">back</button></a>
 </body>
</html>

