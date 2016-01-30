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
			mysql_query("DELETE FROM follow WHERE follower = '$id' AND following = '$uid'");
			echo "Follow";
		}else{
			mysql_query("INSERT INTO follow VALUES (NULL, '$id', '$uid', now())");
			echo "Unfollow";
		}

	}
	
}else{
		
}
?>