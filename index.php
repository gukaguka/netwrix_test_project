<?php
	
	include("config.php");
	$query = $connect->query("SELECT * FROM loc_country");
?>

<?php
while($row = $query->fetcha_assoc() ){
	
	echo "<table>
	<tr>
		<td>
		{$row['name]}
		</td>
	</tr>

</table>"
}
	?>
