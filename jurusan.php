<?php
//  nlbr -> utk mengubah enter menjadi tag br
//file_get_contents() -> membuka file & mengambil isi file
echo "Data berikut diambil dari file 
ftd_upj.txt:<br>";
echo nl2br(file_get_contents('ftd_upj.txt'));
?>