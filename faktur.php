<?php
include('koneksi.php');
$faktur =mysql_query("select * from faktur");


?>

<table border="1">
	<tr>
		<td>Merk</td>
		<td>Qty</td>
		<td>Harga</td>
	</tr>
<?php
while($data = mysql_fetch_array($faktur)) { ?>
		<tr>
			<td><?php echo $data['Merk'];?></td>
			<td><?php echo $data['Qty'];?></td>
			<td><?php echo $data['Harga'];?></td>
		</tr>
		
<?php } ?>
</table>		