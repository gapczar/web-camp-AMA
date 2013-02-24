<?php
	include("connect.php");

	$query =  mysql_query("SELECT app_name,icon FROM apps") or die("Error: " . mysql_error());

	while(mysql_num_rows($query) > 0){
		while($row = mysql_fetch_row($query)){
			echo("<tr>");
					echo("<td><input type='checkbox' id='checker' value='$row[0]'></td>");
					echo("<td><img src='../../apps-list/images/$row[1]' width='62px' height='62px'></td>");
					echo("<td>$row[0]</td>");
				echo("</tr>");
		}
	}
?>