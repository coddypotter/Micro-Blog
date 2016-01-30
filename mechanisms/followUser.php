<?php 
include("../includes/mysql.php"); 
include("../includes/functions.php"); 
include("../includes/sessions.php"); 

if(isset($_POST['uid'])){
	$uid = sanitize($_POST['uid']);
	$chk = mysql_num_rows(mysql_query("SELECT * FROM follow WHERE follower = '$id' AND following = '$uid'"));
	if($chk > 0){
		mysql_query("DELETE * FROM follow WHERE follower = '$id' AND following = '$uid'");
		echo "Unfollowed";
	}else{
		mysql_query("INSERT INTO follow VALUES (NULL, $id, $uid, now())");
		echo "Followed";
	}
}else{
		
}
?>