<h2><center>Data Mutasi</center></h2>
<hr/>
<table border="1" width="100%" style="text-align:center;">
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Divisi</th>
		<th>Jabatan</th>
		<th>Golongan</th>
	</tr>
	<?php 
	$no = 1;
	foreach($mutasi as $row)
	{
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $row['namaDepartment']; ?></td>
			<td><?php echo $row['namaDivisi']; ?></td>
			<td><?php echo $row['namaJabatan']; ?></td>
			<td><?php echo $row['namaGolongan']; ?></td>
		</tr>
		<?php
	}
	?>
</table>