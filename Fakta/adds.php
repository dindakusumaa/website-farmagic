<?php 

// menghubungkan dengan koneksi
$koneksi = mysqli_connect("localhost","root","","fakta_menarik");

// menghubungkan dengan library excel reader
include "excel_reader.php";


// upload file xls
$target = basename($_FILES['exel_file']['name']);
move_uploaded_file($_FILES['exel_file']['tmp_name'], $target);

// beri permisi agar file xls dapat di baca
chmod($_FILES['exel_file']['name'],0777);

// mengambil isi file xls
$data = new Spreadsheet_Excel_Reader($_FILES['exel_file']['name'],false);
// menghitung jumlah baris data yang ada
$jumlah_baris = $data->rowcount($sheet_index=0);

// jumlah default data yang berhasil di import
$berhasil = 0;
for ($i=2; $i<=$jumlah_baris; $i++){

    // menangkap data dan memasukkan ke variabel sesuai dengan kolumnya masing-masing
    $id_fakta = $data->val($i, 1);
    $judul = $data->val($i, 2);
    $gambar = $data->val($i, 3);
    $isi = $data->val($i, 4);
    $id_kategori = $data->val($i, 5);

    if($id_fakta != "" && $judul != "" && $gambar != "" && $isi != "" && $id_kategori != "")
    {
        // input data ke database (table barang)
        mysqli_query($koneksi,"INSERT into fakta values('$id_fakta','$judul','$gambar', '$isi', '$id_kategori')");
        $berhasil++;
    }
}

// hapus kembali file .xls yang di upload tadi
unlink($_FILES['exel_file']['name']);

// alihkan halaman ke index.php
#header("location:index.php");
?>