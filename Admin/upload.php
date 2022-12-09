<?php 
	$koneksi = mysqli_connect(
		"localhost",
		"farmagii_root",
		"farmagic_",
		"farmagii_db"
);
if(mysqli_connect_errno())
{
echo "Koneksi Gagal " .mysqli_connect_error() ;
}
	$gambar = $_FILES['gambar']['name'];
	$file_tmp = $_FILES['gambar']['tmp_name'] ;
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];

	$dir = "file/$gambar";
    move_uploaded_file($file_tmp, $dir);
    	$query = "INSERT INTO slide SET 
								    judul = '$judul',
								    deskripsi = '$deskripsi',
                                    gambar = '$gambar'
	";
	mysqli_query($koneksi, $query) 
	or die("SQL Error " .mysqli_error());
	header('location:home.php');
?>