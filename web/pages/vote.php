<?php
	include("header.php");
?>
	<section>
		<h2 class="voting">Vote Your Favorite Mobile App</h2>
		<table class="viewTable">
			<tr class="tableHeader">
				<td><input type="checkbox" id="checker"/></td>
				<td>App Icon</td>
				<td>App Name</td>
			</tr>
			<?php
				include 'getAllapps.php';
			?>
		</table>
	</section>

<?php
	include("footer.php");
?>