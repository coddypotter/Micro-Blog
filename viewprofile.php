<?php
include 'includes/sessions.php';
if(isset($_GET['id'])){
	$uid = $_GET['id'];
}
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $fname;?></title>
    <link rel="stylesheet" type="text/css" href="css/font.css">
    <link rel="stylesheet" type="text/css" href="fonticons/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/user.css">
</head>
<body>
<header>
	<div class="header">
		<div class="sitename"><span class="fa fa-fw fa-html5"></span> Micro Blog</div>
		<div class="linkRight">
			<a href="user.php"><span class="fa fa-fw fa-home"></span></a>
			<a href="search.php"><span class="fa fa-fw fa-search"></span></a>
			<a href="start/logout.php"><span class="fa fa-fw fa-sign-in"></span></a>
		</div>
	</div>
</header>
<section>
	<input type="hidden" class="uid" value="<?php echo $uid;?>">
	<div class="left"> 
		<div class="card">
			<div class="avatar">
				<img src="">
			</div>
		</div>
		<div class="card">
			<b class="name"></b>
			<button class="follow"></button>
		</div>
	</div>	
	<div class="right">
		
		<div class="feeds">
			
		</div>
	</div>
</section>
<aside>
	
</aside>
<footer>
	
</footer>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/viewprofile.js"></script>
</body>
</html>