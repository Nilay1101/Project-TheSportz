
<?php

include("connect.php");
		
		$creferral1=$_GET['creferral'];
		$uri="http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
		$server=$_SERVER['HTTP_HOST'];
		$browser=$_SERVER['HTTP_USER_AGENT'];
		$referal=$_SERVER['HTTP_REFERER'];
		$ipadr=$_SERVER['REMOTE_ADDR'];
		$date_time= date('d-m-y');

		mysql_query("INSERT INTO `naipathya_tracker`(`id`, `server`, `browser`, `refral`, `ipadr`, `date_time`,`creferral`,`uri`) VALUES ('','$server','$browser','$referal','$ipadr','$date_time','$creferral1','$uri')");

		mysql_close($conn);



?>
