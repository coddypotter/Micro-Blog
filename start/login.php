<?php 
ob_start();
session_start();
include("../includes/mysql.php"); 
include("../includes/functions.php"); 

if(isset($_POST['email'],$_POST['password'])){
	$email = sanitize($_POST['email']);
	$passwd = $_POST['password'];
	$pass = md5($passwd);
	$query = mysql_query("SELECT * FROM user WHERE email= '$email' AND password = '$pass'");
		if(mysql_num_rows($query) > 0){
			$getInfo = mysql_fetch_array($query);
			
				$_SESSION['id'] = $getInfo['id'];
				$_SESSION['fname'] = $getInfo['fname'];
				$_SESSION['lname'] = $getInfo['lname'];
				$_SESSION['email'] = $getInfo['email'];
				$_SESSION['pic'] = $getInfo['pic'];
				header("location:../user.php");
			
		}else{
			$msg1 = "Error";
			$msg2 = "No Records found. Try again with correct credentials";
		}
	
}else{
	$msg1 = "Error";
	$msg2 = "No Records found. Try again with correct credentials";	
}

?>
<div style="padding:20px; border: solid 1px #bbb; font-size:26px;">
	<?php echo $msg2; ?>. <a href="../index.php">Go Back</a>
</div>