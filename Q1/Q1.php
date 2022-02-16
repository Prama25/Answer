<?php

echo "Masukkan Nama Restoran: ";
$input_nama = fopen("php://stdin","r");
$nama = trim(fgets($input_nama));

echo "$nama\n";

echo "Masukkan Tanggal(hh/bb/tttt) & Waktu Pemesanan(jj:mm:dd): ";
$input_tgl = fopen("php://stdin","r");
$tgl = trim(fgets($input_tgl));

echo "$tgl\n";

echo "Masukkan Nama Kasir: ";
$input_nama2 = fopen("php://stdin","r");
$tgl = trim(fgets($input_nama2));

echo "$nama2\n";
?>
