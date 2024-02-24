<?php

include "koneksi.php";
$nama = $koneksi->real_escape_string($_POST['nama']); 
$no_hp = $koneksi->real_escape_string($_POST['no_hp']); 
$alamat = $koneksi->real_escape_string($_POST['alamat']);
$jenis_mie = $koneksi->real_escape_string($_POST['jenis_mie']);
$jumlah = $koneksi->real_escape_string($_POST['jumlah']);
$harga = $koneksi->real_escape_string($_POST['harga']);
$metode_pembayaran = $koneksi->real_escape_string($_POST['metode_pembayaran']); 


$simpan=$koneksi->query("insert into beli_mie(nama,no_hp,alamat,jenis_mie,jumlah,harga,metode_pembayaran) 
                        values ('$nama', '$no_hp', '$alamat', '$jenis_mie', '$jumlah', '$harga', '$metode_pembayaran')");

if($simpan==true){

    header("location:beli-mie.php?pesan=inputBerhasil");
} else{
    echo "Error";
}

?>