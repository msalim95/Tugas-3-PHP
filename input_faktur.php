<?php
include('koneksi.php');
if(isset($_POST['save'])) {
	$query_save="insert into faktur (Merk,Qty,Harga)
	values('".$_POST['Merk']."',
		   '".$_POST['Qty']."',
		   '".$_POST['Harga']."',
	)";
	$proses=mysql_query($query_save);
	if($proses){
		echo "Data berhasil di input";
	}else{
		echo mysql_error();
	}	
}
?>
<form method="post">
<table border="1">
	<tr>
		<td>Merk</td>
		<td><input type="text" nama="Nik"></td>
	</tr>
	
	<tr>
		<td>Qty</td>
		<td><input type="text" nama="Qty"></td>
	</tr>
	
	<tr>
		<td>Harga</td>
		<td><input type="text" nama="Harga"></td>
	</tr>
	
	<tr>
		<td></td>
		<td><input type="Submit" nama="Save"></td>
	</tr>
</table>
</form>