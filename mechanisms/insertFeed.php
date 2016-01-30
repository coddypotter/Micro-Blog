<?php 
include("../includes/mysql.php"); 
include("../includes/functions.php"); 
include("../includes/sessions.php"); 

if(isset($_POST['text'])){
	$text = ($_POST['text']);
	$chk = mysql_query("INSERT INTO feed VALUES (NULL, '$id', '$text', now())");
	//done till here
	if($chk){
		echo "Feed Posted";
	}else{
		echo "Error. Try again later";
	}
}else{
		
}
?>