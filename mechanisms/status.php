<?php 
include("../includes/mysql.php"); 
include("../includes/functions.php"); 
include("../includes/sessions.php"); 

if(isset($_POST)){
	$uid = $_POST['uid'];
	if($id == $uid){
		echo "Your cant follow yourself";
	}else{
		$chk = mysql_query("SELECT * FROM follow WHERE follower = '$id' AND following = '$uid'") or die(mysql_error());
		if(mysql_num_rows($chk) > 0){
			echo "Un Follow";
		}else{
			echo "Follow";
		}

	}
	
}else{
		
}
?>