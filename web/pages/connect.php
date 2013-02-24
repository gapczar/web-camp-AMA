<?php

$conn = mysql_connect("localhost", "root", "root");
if(!$conn){
	di("Could not conenct:" . mysql_error());
}
mysql_select_db("poll_web");
?>