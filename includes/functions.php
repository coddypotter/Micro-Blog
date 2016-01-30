<?php
function gethashtags($msg){
  preg_match_all('/(^|[^a-z0-9_])#([a-z0-9_]+)/i', $msg, $matchedHashtags);
  $hashtag = '';
  if(!empty($matchedHashtags[0])) {
	  foreach($matchedHashtags[0] as $match) {
		  $hashtag .= preg_replace("/[^a-z0-9]+/i", "", $match).',';
	  }
  }
	return $hashtag;
}
function cleanDate($date){
	if(empty($date)){
		return "no date provided";
	}
	$periods = array("second", "minute", "hour", "day", "week", "month", "year", "decade");
	$lengths = array("60", "60", "24", "7", "4.35", "12", "10");
	
	$now = time();
	$unix_date = strtotime($date);
	
	if(empty($unix_date)){
		return "bad date";
	}
	if($now > $unix_date){
		$difference = $now - $unix_date;
		$tense = "ago";
	}else{
		$difference = $unix_date - $now;
		$tense = "from now";
	}
	for($j = 0; $difference>= $lengths[$j] && $j < count($lengths) - 1; $j++){
		$difference /= $lengths[$j];
	}
	$difference = round($difference);
	
	if($difference != 1){
		$periods[$j].= "s"; 
	}
	return "$difference $periods[$j] {$tense}";
}
function impHash($text){
	$text = html_entity_decode($text);
    $text = " ".$text;	
	@$text = preg_replace(array('/(^|[^a-z0-9_])#([a-z0-9_]+)/i'), array('$1<a href="#">$2</a>'), $text);
	return $text;	
}
function tolink($text){
        $text = html_entity_decode($text);
        $text = " ".$text;
        @$text = eregi_replace('(((f|ht){1}tp://)[-a-zA-Z0-9@:%_\+.~#?&//=]+)',
                '<a href="\\1" target="_blank">\\1</a>', $text);
        @$text = eregi_replace('(((f|ht){1}tps://)[-a-zA-Z0-9@:%_\+.~#?&//=]+)',
                '<a href="\\1" target="_blank">\\1</a>', $text);
        @$text = eregi_replace('([[:space:]()[{}])(www.[-a-zA-Z0-9@:%_\+.~#?&//=]+)',
        '\\1<a href="http://\\2" target="_blank">\\2</a>', $text);
        @$text = eregi_replace('([_\.0-9a-z-]+@([0-9a-z][0-9a-z-]+\.)+[a-z]{2,3})',
        '<a href="mailto:\\1" target="_blank">\\1</a>', $text);
		@$text = preg_replace(array('/(^|[^a-z0-9_])@([a-z0-9_]+)/i', '/(^|[^a-z0-9_])#([a-z0-9_]+)/i'), array('$1<a href="">@$2</a>', '$1<a href="hashtags.php?hashTag=$2" target="_blank">#$2</a>'), $text);
        return $text;
}

function sanitize($var){
$var = stripslashes($var);
$var = strip_tags($var);
$var = mysql_real_escape_string($var);
$var = htmlentities($var);
$var = htmlspecialchars($var);
return $var;
}

function g(){
	$pass = "";
	for($i=0;$i<5;$i++){
		$pass .= rand(0,9);
	}
	return $pass;
}
?>