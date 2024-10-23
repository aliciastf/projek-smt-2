<html>
<head><title> Mini notepad </title> </head>
<body>
<h2>Mini Notepad</h2> 
<hr>
<form action="" method="post"> 
<table width="100%" border="0">
<tr> 
<td width="150" valign="top">Isi Tulisan</td>
<td><textarea name="isi" cols="150" rows="20" required></textarea></td>
</tr> 
<tr>
<td width="150">Nama File</td> 
<td><input type="text" name="namafile" required> <input type="submit" value="simpan"></td>
</tr>
</table>
</form>
<?php
if(isset($_POST['namafile'])){
$nama = trim($_POST['namafile']); 
$namafile = "$nama.txt";
$isi = trim($_POST['isi']); 
$file = fopen($namafile,"w");
fwrite($file,$isi); 
fclose($file); 
echo "<h2>Hasil Penyimpanan Data</h2>"; 
echo "<hr>"; 
echo "Hasil : <a href='$namafile'> $namafile </a>"; 
}
?> 
</body> 
</html>
