<?php
	
	include("config.php");
	$query = $connect->query("SELECT * FROM heroku_b282da8a31f51a7loc_country");
?>

<?php
while($row = $query->fetcha_assoc() ){
	
	echo "<table>
	<tr>
		<td>
		{$row['name']}
		</td>
	</tr>

</table>";
}
	?>
