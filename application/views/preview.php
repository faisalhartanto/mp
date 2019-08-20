<html>
<head>
	<title>Cetak PDF</title>
</head>
<body>
<h1 style="text-align: center;">Data Siswa</h1>
<a href="<?php echo base_url("index.php/main/cetak"); ?>">Cetak Data</a><br><br>

<style>
table {
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
}
</style>

<table border="1" align="center">
<tr>
	<th>No</th>
	<th>Id Pekerjaan</th>
	<th>Tanggal</th>
	<th>Kategori</th>
	<th>Pekerjaan</th>
	<th>Picture</th>
</tr>
<?php
if( ! empty($siswa)){
	$no = 1;
	foreach($siswa as $data){
		echo "<tr>";
		echo "<td>".$no."</td>";
		echo "<td>".$data->id_job."</td>";
		echo "<td>".$data->tgl."</td>";
		echo "<td>".$data->kat."</td>";
		echo "<td>".$data->nama_job."</td>";
		echo "<td>".$data->img_after."</td>";
		echo "</tr>";
		$no++;
	}
}
?>
</table>
</body>
</html>
