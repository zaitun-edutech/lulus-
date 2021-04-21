<h3>Data Siswa</h3>
<div class="well">
<fieldset>
<legend>Nama-Nama Data Siswa Kelas 9</legend>
<table class="table table-striped table-hover">
<thead>
<th>No</th>
<th>NIS</th>
<th>Nama Siswa</th>
<th>KELAS</th>
<th>AGM</th>
<th>PPKN</th>
<th>BINDO</th>
<th>MTK</th>
<th>SEJINDO</th>
<th>INGRS</th>
<th>SENI</th>
<th>PKWU</th>
<th>PENJAS</th>
<th>BJAWA</th>
<th>MTKP</th>
<th>BI0</th>
<th>FIS</th>
<th>KIM</th>
<th>EKOLM</th>
<th>GEO</th>
<th>SASING</th>
<th>SEJP</th>
<th>SOSIO</th>
<th>EKO</th>
<th>Keterangan</th>
</tr>
</thead>
<?php
include('../config.php');
$q = mysql_query("select * from tb_student");
$n = 1;
while($r = mysql_fetch_array($q))
{
	echo '<tbody><tr class="info"><td>'.$n.'</td><td>'.$r["noujian"].'</td><td>'.$r["name"].'</td><td>'.$r["kelas"].'</td><td>'.$r["agama"].'</td><td>'.$r["ppkn"].'</td><td>'.$r["bindo"].'</td><td>'.$r["mtk"].'</td><td>'.$r["sejindo"].'</td><td>'.$r["bing"].'</td><td>'.$r["seni"].'</td><td>'.$r["prakarya"].'</td><td>'.$r["penjas"].'</td><td>'.$r["bjawa"].'</td><td>'.$r["mtkp"].'</td>><td>'.$r["bio"].'</td><td>'.$r["fis"].'</td><td>'.$r["kim"].'</td><td>'.$r["ekolm"].'</td><td>'.$r["geo"].'</td><td>'.$r["sasing"].'</td><td>'.$r["sejp"].'</td><td>'.$r["sosio"].'</td><td>'.$r["eko"].'</td><td>'.$r["ket"].'</td></tr></tbody>';
	$n++;
}
?>
</table>
*) Anda dapat mempersiapkan dan mengedit data melalui microsoft Excel. Format file dapat di download <a href="contoh-data.xls">Disini</a><br />
*) Jangan lupa hapus header di file excel setelah mengedit / input data, kemudian disave dan diimport <a href="index.php?page=import">disini.</a>
</div>
<a href="index.php?page=hapus" class="btn btn-primary">Hapus Semua Data</a>
</fieldset>
	