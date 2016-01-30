<?php 
include("../includes/mysql.php"); 
include("../includes/functions.php"); 
include("../includes/sessions.php"); 

if(isset($_POST['key'])){
	$key = sanitize($_POST['key']);
	$chk = mysql_query("SELECT * FROM user WHERE fname like '%$key%' OR lname like '%$key%'");
	if(mysql_num_rows($chk) > 0){
		while($a = mysql_fetch_array($chk)){
			$fid = $a['id'];
			$pname = $a['fname'].' '.$a['lname'];
			$ppic = $a['pic'];
			?>
			<div class="feed">
				<div class="fleft"><img src="<?php echo $ppic;?>"></div>
				<div class="fright">
					<div class="fname"><?php echo $pname;?></div>
					<div class="flink"><a href="viewprofile.php?id=<?php echo $fid; ?>">View Profile</a></div>
				</div>
			</div>
			<?php
		}
	}else{
		echo "No Users Found";
	}
}else{
		
}
?>