<?php 
include("../includes/mysql.php"); 
include("../includes/functions.php"); 
include("../includes/sessions.php"); 

if(isset($_POST['uid'])){
	$uid = $_POST['uid'];
	
	$chk = mysql_query("SELECT f.*, u.fname, u.lname, u.pic FROM feed f, user u WHERE f.user_id = '$uid' AND u.id = f.user_id ORDER BY f.id DESC") or die(mysql_error());
	if(mysql_num_rows($chk) > 0){
		while($a = mysql_fetch_array($chk)){
			$fid = $a['id'];
			$pname = $a['fname'].' '.$a['lname'];
			$ppic = $a['pic'];
			$feed = tolink($a['feed']);
			$time = cleanDate($a['time']);
			?>
			<div class="feed">
				<div class="fleft"><img src="<?php echo $ppic;?>"></div>
				<div class="fright">
					<div class="fname"><?php echo $pname;?></div>
					<div class="fpost"><?php echo $feed;?></div>
					<div class="ftime"><?php echo $time;?></div>
				</div>
			</div>
			<?php
		}
	}else{
		echo "No Feeds Found";
	}
}else{
		
}
?>