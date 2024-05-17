<?php
$host="localhost";
$user="root";
$password="";
$db_name="project";

$con = mysqli_connect($host, $user, $password, $db_name);  
   if(mysqli_connect_errno()) {  
       die("Failed to connect with MySQL: ". mysqli_connect_error());  
   } 

   $user = $_POST['user'];
   $pass = $_POST['pass'];
      
   $sql = "select * from logindetails where user = '$user' && password='$pass'";  
   $result = mysqli_query($con, $sql);  
   $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
   $count = mysqli_num_rows($result);
if($count==1){
    
echo "<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}
.ad{
  
  color: 	white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  background-color: #008080	;

}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #708090;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body style=\"background-color:#008080\">

<div class=\"ad\"  align=\"center\"><h1>ADMIN PAGE</h1></div>


<div class=\"topnav\">
  <a class=\"active\" href=\"loginpage.php\">LOG OUT</a>
  <a href=\"auth.php\">ASSET ENTRY PAGE</a>
  <a href=\"auth_2.php\">ASSET DETAILS</a>
  <a href=\"auth_3.php\">ISSUE</a>
  <a href=\"auth_5.php\">MASTER DETAILS</a>

</div>


</body >
</html>";

    




   }  
else
{
    echo "<h1> login failed</h1>";
}
?>