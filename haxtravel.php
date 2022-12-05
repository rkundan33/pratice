<?php
// submit btn pass in isset fuction
if (isset($_POST ["submit"])) {
$fname = $_POST["fname"];
$mail = $_POST["mail"];
$st = $_POST["place"];
$date = $_POST["date"];
$nob = $_POST["nob"];
$check = $_POST["check"];
$code = $_POST["code"];
// for radio btn used isset fuction
if (isset($_POST["TC"])) {
   $tc = $_POST["TC"]; 
}
$btn =$_POST["submit"];

   echo "bhaag bhosdi wale";
}






// Create a connection
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "haxtravel";


 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);


 return $conn;
 }

function CloseCon($conn)
 {
 $conn -> close();
 }
 
?>