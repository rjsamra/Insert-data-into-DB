<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "crud";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}
?><?php
include_once 'database.php';
if(isset($_POST['save']))
{	 $name = $_POST['name'];
	 $email = $_POST['email'];
	 $mobno = $_POST['mobno'];
	 $dob = $_POST['dob'];
	 $pcode = $_POST['pcode'];
	 $sql = "INSERT INTO testing (name,email,mobno,dob,pcode)
	 VALUES ('$name','$email','$mobno','$dob','$pcode')";
	
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>