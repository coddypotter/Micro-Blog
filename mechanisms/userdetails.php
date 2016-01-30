<?php 
include("../includes/mysql.php"); 
include("../includes/functions.php"); 
include("../includes/sessions.php"); 

if(isset($_POST['uid'])){
	$uid = $_POST['uid'];
	
	$chk = mysql_query("SELECT * FROM user WHERE id = '$uid'") or die(mysql_error());
	if(mysql_num_rows($chk) > 0){
		$a = mysql_fetch_array($chk);
		$a['msg'] = "OK";
	}else{
		$a['msg'] = "No Users Found";
	}
	echo json_encode($a);
}else{
		
}
?>