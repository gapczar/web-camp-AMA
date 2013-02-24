<?php

$conn = mysql_connect("localhost", "root", "");
if(!$conn){
	di("Could not conenct:" . mysql_error());
}
?>