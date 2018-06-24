<?php 
	
	//$timezone = date_default_timezone_get();
	//echo "The current server timezone is: " . $timezone;

	date_default_timezone_set(' Asia/Calcutta');
	echo $date = date('m/d/Y', time());
	echo $time = date('h:i:s',time());

	if($date=='05/30/2018')
		echo 'Done';
	if($time<='05:30:00')
		echo 'Done with time';

?>
