<?php 
include("../includes/mysql.php"); 
include("../includes/functions.php"); 
include("../includes/sessions.php"); 

if(isset($_GET)){
	$sql = mysql_query("SELECT * FROM follow WHERE follower = '$id'");
	$prepareIds = $id;
	if (mysql_num_rows($sql) > 0) {
		while ($d = mysql_fetch_array($sql)) {
			$prepareIds .= ','.$d['following'];
		}
	} else {
		
	}
	$chk = mysql_query("SELECT f.*, u.fname, u.lname, u.pic FROM feed f, user u WHERE f.user_id IN ($prepareIds) AND u.id = f.user_id ORDER BY f.id DESC") or die(mysql_error());
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