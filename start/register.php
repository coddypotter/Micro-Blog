<?php 
include("../includes/mysql.php"); 
include("../includes/functions.php"); 

if(isset($_POST['fname'],$_POST['lname'],$_POST['email'],$_POST['password'])){
	$fname = sanitize($_POST['fname']);
	$lname = sanitize($_POST['lname']);
	$contact = sanitize($_POST['contact']);
	$email = sanitize($_POST['email']);
	$passwd = $_POST['password'];
	$pass = md5($passwd);
	$chk = mysql_num_rows(mysql_query("SELECT * FROM user WHERE email = '$email'"));
	if($chk > 0){
		$err = "Email Error";
	}else{
		$inst = mysql_query("INSERT INTO user VALUES (NULL, '$fname', '$lname', '$email', '$pass', '$contact', 'images/avatar.png')") or die(mysql_error());
		$token = mysql_insert_id();
		if($inst){
			mkdir("../users/".$token, 0755);
			$err =  "Success";			
		}else{
			$err = "Registration Error";
		}
	}
}else{
		
}
?>
<div style="padding:20px; border: solid 1px #bbb; font-size:26px;">
	<?php echo $err; ?>. <a href="../index.php">Go Back</a>
</div>