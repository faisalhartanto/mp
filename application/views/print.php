<html>
<head>
	<title>Cetak PDF</title>
</head>
<body>

<h1 style="text-align: center;">Data Pekerjaan</h1>

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
	<th align=center>Tanggal</th>
	<th align=center>Kategori</th>
	<th align=center>Pekerjaan</th>
	<th align=center>Pelaksana</th>
	<th align=center>Image Before</th>
	<th align=center>Image After</th>
	
</tr>
<?php
if( ! empty($pekerjaan)){
	$no = 1;
	foreach($pekerjaan as $data){
		echo "<tr>";
		echo "<td align=center>".$no."</td>";
		echo "<td align=center>".$data->id_job."</td>";
		echo "<td align=center>".$data->tgl."</td>";
		echo "<td>".$data->kat."</td>";
		echo "<td>".$data->nama_job."</td>";
		echo "<td align=center>".$data->pelaksana."</td>";
		echo "<td align=center><img src=http://localhost/bm/assets/img/".$data->img_before." width=50 height=50></td>";
		echo "<td align=center><img src=http://localhost/bm/assets/img/".$data->img_after." width=50 height=50></td>";
		echo "</tr>";
		$no++;
	}
}
?>
</table>

</body>
</html>
