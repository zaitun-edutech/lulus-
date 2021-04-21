<html>
<head>
<title> Hasil Pencarian </title>
</head>
<body>
<?php
include "../config.php";
$noujian= $_POST['noujian']; //get the nama value from form
$q = "SELECT * from tb_student where noujian = '$noujian' "; //query to get the search result
$result = mysql_query($q); //execute the query $q
$num_rows = mysql_num_rows($result);
if($num_rows == 0) echo "<br><div align='center' class='alert alert-dismissable alert-danger'><h4>Maaf, Nomor Peserta Ujian Salah Atau Tidak Ada Dalam Database!</h4></div><meta http-equiv='refresh' content='2; url=index.php'>";
else 
echo "<div align='center'><h4>Hasil Pencarian</h4></div>";
echo "<table width='400' class='table table-striped table-hover'>";
while ($data = mysql_fetch_array($result)) {  //fetch the result from query into an array
echo "
 <tr class='warning'>
    <td width='180'>NIS</td>
    <td colspan=''><strong>".$data['noujian']."</strong></td>
  </tr>
  <tr class='success'>
    <td>Nama Lengkap</td>
    <td colspan=''><font style='text-transform: capitalize;'><strong>".$data['name']."</strong></font></td>
  </tr>
  <tr class='success'>
    <td>Kelas</td>
    <td colspan=''><font style='text-transform: capitalize;'><strong>".$data['kelas']."</strong></font></td>
  </tr>

  <td></td>
  <td><div align='center'></div></td>
  </tr>
  
  
  
  
  <tr class='danger'>
    <td>Keterangan</td>
    <td colspan='1'><font color='#0066FF' size='5' style='text-transform: uppercase;'>".$data['ket']."</td>
  </tr>";
echo "</table>";
$pilih=$data['jurusan'];
if($pilih=='IPA')
{
echo "<div align='center'><a href='cetaksk.php?noujian=".$data['noujian']."' class='btn btn-success'>Cetak Surat Keterangan Kelulusan</a></div>";
}
else
{
echo "<div align='center'><a href='cetakskips.php?noujian=".$data['noujian']."' class='btn btn-success'>Cetak Surat Keterangan Kelulusan</a></div>";
}
}
?>
</body>
</html>