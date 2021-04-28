<html>
  <head>
  <style type="text/css">
            table.satu { border-collapse:collapse; }
            table.dua { border-collapse:separate; }
            td.a {
                border-style:dotted;
                border-width:3px;
                border-color:#000000;
                padding: 10px;
            }
            td.b {
                border-style:solid;
                border-width:3px;
                border-color:#333333;
                padding:10px;
            }
        </style>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Cetak Surat Kelulusan</title>
<style>
    @media print
{    
    .no-print, .no-print *
    {
        display: none !important;
    }
}

   
</style>

</head>
<body onLoad="window.print();">   
<?php
include('config.php');
$noujian = $_GET['noujian'];
$q = mysql_query("SELECT * FROM tb_student where noujian = '$noujian'");
while($r = mysql_fetch_array($q))

{
  echo '<table width="800" align="center">';
  echo '<tr>
    <table border="0" width="100%">
  <tr>
    
    <td align="center">
		<img src="images/kop.png" alt="logo2" width="900">
      
    </td>
    <tr>
    
      </center>
  </tr>
</table>
  </tr>';
  
  echo '<tr>
		<h4 align="center" style="margin:0px;font-size:22px;"><b><u>SURAT KETERANGAN LULUS</u></b></h4>
		<h4 align="center" style="margin:0px;font-size:17px;"><b>NOMOR : XXX/XXX/2020</b></h4>
		<br>
		<h4 align="center" style="margin:0px;font-size:19px;"><b>SMA NEGERI 9 LUWU UTARA</b></h4>
		<h4 align="center" style="margin:0px;font-size:17px;"><b>PEMINATAN : IPS (Ilmu Pengetahuan Sosial)</b></h4>
		<h4 align="center" style="margin:0px;font-size:17px;"><b>TAHUN PELAJARAN 2020/2021</b></h4>
        
  
    <td colspan="4"><div align="justify">
      
    </div></td>
  </tr>';
  echo '<tr>
    <table width="80%" border="0" align="center">
	<td align="justify" width="7%">Yang bertanda  tangan di bawah ini, Kepala Sekolah Menengah Atas Negeri 9 LUWU UTARA, menerangkan dengan sesungguhnya bahwa :</td><br><br>
    </tr>';
  
  echo '<tr>
	<table width="200%" border="0">
    <td width="170">&nbsp;</td>
    <td width="240">Nama</td>
    <td colspan="2">: '.$r['name'].' </td>
  </tr>';
  echo '<tr>
	<table width="200%" border="0">
    <td width="170">&nbsp;</td>
    <td width="240">Tempat, Tgl Lahir</td>
    <td colspan="2">: '.$r['tgllhr'].' </td>
  </tr>';
  echo '<tr>
	<table width="200%" border="0">
    <td width="170">&nbsp;</td>
    <td width="240">Nama Orang Tua</td>
    <td colspan="2">: '.$r['ortu'].' </td>
  </tr>';
  echo '<tr>
	<table width="200%" border="0">
    <td width="170">&nbsp;</td>
    <td width="240">Nomor Induk Siswa</td>
    <td colspan="2">: '.$r['NIS'].' </td>
  </tr>';
  echo '<tr>
	<table width="200%" border="0">
    <td width="170">&nbsp;</td>
    <td width="240">Nomor Induk Siswa Nasional</td>
    <td colspan="2">: '.$r['NISN'].' </td>
  </tr>';
  
  echo '<tr>
    <table width="80%" border="0" align="center">
	<td align="justify" width="7%">Yang bersangkutan dinyatakan <b>LULUS</b> berdasarkan hasil Keputusan Rapat Pleno Kelulusan Dewan Guru SMA Negeri 9 LUWU UTARA pada hari Jumat tanggal 1 Mei 2021, dengan nilai sebagai berikut:</td><br><br>
    </tr>';
  echo '<tr>
	<table width="200%" border="0">
    <td width="50">&nbsp;</td>
    <td width="129"></td>
    <td colspan="2"></td>
  </tr>';
  echo '<tr>
  
  <table class="satu" width="80%" border="1" align="center">
  
  	<td align="center" width="7%">NO</td>
	<td align="center" width="60%">MATA PELAJARAN</td>
	<td align="center" width="13%">NILAI RATA-RATA UJIAN SEKOLAH </td>  
	</tr>';
	 echo '<tr>
		<td colspan="2" align="LEFT">Kelompok Wajib A</td>
		<td align="center"></td>
	</tr>';
	
  echo '<tr>
		<td align="center">1</td>
		<td align="left">Pendidikan Agama dan Budi Pekerti</td>
		<td align="center">'.$r['agama'].' </td>
	</tr>';
	
echo '<tr>
		<td align="center">2</td>
		<td align="left">Pendidikam Pancasila dan Kewarganegaraan</td>
		<td align="center">'.$r['ppkn'].' </td>
	</tr>';
	echo '<tr>
		<td align="center">3</td>
		<td align="left">Bahasa Indonesia</td>
		<td align="center">'.$r['bindo'].' </td>
	</tr>';
	echo '<tr>
		<td align="center">4</td>
		<td align="left">Matematika</td>
		<td align="center">'.$r['mtk'].' </td>
	</tr>';
	echo '<tr>
		<td align="center">5</td>
		<td align="left">Sejarah Indonesia</td>
		<td align="center">'.$r['sejindo'].' </td>
	</tr>';
	echo '<tr>
		<td align="center">6</td>
		<td align="left">Bahasa Inggris</td>
		<td align="center">'.$r['bing'].' </td>
	</tr>';
	
	echo '<tr>
		<td colspan="2" align="LEFT">Kelompok Wajib B</td>
		<td align="center"></td>
	</tr>';
	
	echo '<tr>
		<td align="center">1</td>
		<td align="left">Seni Budaya</td>
		<td align="center">'.$r['seni'].' </td>
	</tr>';
	echo '<tr>
		<td align="center">2</td>
		<td align="left">Prakarya dan Kewirausahaan</td>
		<td align="center">'.$r['prakarya'].' </td>
	</tr>';
	echo '<tr>
		<td align="center">3</td>
		<td align="left">Pendidikam Jasmani, Olahraga dan Kesehatan</td>
		<td align="center">'.$r['penjas'].' </td>
	</tr>';
	echo '<tr>
		<td align="center">4</td>
		<td align="left">Muatan Lokal : Bahasa Jawa</td>
		<td align="center">'.$r['bjawa'].' </td>
	</tr>';
	
	echo '<tr>
		<td colspan="2" align="LEFT">Kelompok C</td>
		<td align="center"></td>
	</tr>';
	
	echo '<tr>
		<td align="center">1</td>
		<td align="left">Geografi</td>
		<td align="center">'.$r['geo'].' </td>
	</tr>';
	echo '<tr>
		<td align="center">2</td>
		<td align="left">Bahasa dan Sastra Inggris</td>
		<td align="center">'.$r['sasing'].' </td>
	</tr>';
	echo '<tr>
		<td align="center">3</td>
		<td align="left">Sejarah</td>
		<td align="center">'.$r['sejp'].' </td>
	</tr>';
	echo '<tr>
		<td align="center">4</td>
		<td align="left">Sosiologi</td>
		<td align="center">'.$r['sosio'].' </td>
	</tr>';
	echo '<tr>
		<td align="center">5</td>
		<td align="left">Ekonomi</td>
		<td align="center">'.$r['eko'].' </td>
	</tr>';
	
	echo '<tr>
		<td align="center" colspan="2">Rata-rata Nilai</td>
		<td align="center">'.$r['ratana'].' </td>
	</tr>';
	

echo '<tr>
    <table width="80%" border="0" align="center">
	<td align="justify" width="7%">Surat Keterangan Lulus ini berlaku sementara sampai dengan diterbitkannya Ijazah kepada yang bersangkutan, untuk menjadikan maklum bagi yang berkepentingan.</td><br><br>
    </tr>';
  
  
  echo '<tr>
	<table width="200%" border="0">
    <td width="50">&nbsp;</td>
    <td width="129"></td>
    <td colspan="2"></td><br>
  </tr>';
    
  echo '<tr>
    <div style="float:right;margin-right:100px;">
      Cendana Putih, 3 Mei 2021<br>
	  KEPALA SEKOLAH<br>
      <img src="images/tanda.png" alt="" width="200"><br>
      <b>Herianto, S.Pd, M.P.d</><br>
	  NIP. 19681221 199301 1 002
    </div>
  </tr>';
  echo '<tr>
    <td colspan="4"><p>&nbsp;</p>
    <p><b><i>SMA/20303230</i></b></p></td>
  </tr>';
echo '</table>';
}
?>
</body>
</html>