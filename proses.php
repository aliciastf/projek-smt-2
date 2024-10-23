<html>
<head>
<link href="gaya.css"
rel="stylesheet"></head>
<body>
<h1>Daftar Mahasiswa UPJ</h1>
<table border=1><tr>
<th>nim</th>
<th>nama</th>
<th>Prodi</th>
<th>Foto</th></tr>
<?php
$file="data/mahasiswa.json";
$target_dir = "data/";
$namaFile = 
($_FILES["fileFoto"]["name"]);
$target_file = $target_dir . $namaFile;
//cek file existing jika ada load ke $array
if(file_exists($file)){
// Mendapatkan isi file json
$mahasiswa= file_get_contents($file);
// Men-decode anggota.json
$array = json_decode($mahasiswa, true);
}
//cek apakah ada submit jika iya proses baca dan simpan
if (isset($_POST['btnSubmit'])) {
$array [] = array(
'nim' => $_POST['txtNim'],
'nama' => $_POST['txtNama'],
'prodi' => $_POST['txtProdi'],
'foto' => $namaFile
);
    $json = json_encode($array,JSON_PRETTY_PRINT);
//menyimpan file
if (file_put_contents("data/mahasiswa.json", $json)){
move_uploaded_file($_FILES["fileFoto"]["tmp_name"], $target_file);
echo "<script>alert('data telah disimpan dengan baik...')</script>";}
else {
echo "<script>alert('Oops gagal disimpan...')</script>";}
}
//ubah json ke array kemudian tampilkan dalam tabel
$json = json_encode($array,JSON_PRETTY_PRINT);
$data = json_decode($json);
foreach ($data as $key => $mhs){
echo "<tr>
<td>$mhs->nim</td>
<td>$mhs->nama</td>
<td>$mhs->prodi</td>
<td><img src='data/$mhs->foto' width=150px height=150px></td></tr>";
}
?>
</table> <br/>
<a href='form.html'>Input Lagi </a>
</body>
</head>