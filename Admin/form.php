<?php
$host       = "localhost";
$user       = "farmagii_root";
$pass       = "farmagic_";
$db         = "farmagii_db";

$koneksi    = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) { //cek koneksi
    die("Tidak bisa terkoneksi ke database");
}
$name           = "";
$email          = "";
$subjectt        = "";
$message        = "";
$sukses         = "";
$error          = "";

?>
<html>
<head>
<title>Farmagic</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../css/util.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
<!--===============================================================================================-->
	    <!-- Google Web Fonts -->
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">   
	
		<!-- Font Awesome -->
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
	
		<!-- Libraries Stylesheet -->
		<link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
	
		<!-- Customized Bootstrap Stylesheet -->
		<link href="../csss/style.css" rel="stylesheet">
		   <!-- site metas -->
		   <meta name="keywords" content="">
		   <meta name="description" content="">
		   <meta name="author" content="">
		   <!-- bootstrap css -->
		   <link rel="stylesheet" href="../css/bootstrap.min.css">
		   <!-- style css -->
		   <link rel="stylesheet" href="../css/style.css">
		   <!-- Responsive-->
		   <link rel="stylesheet" href="../css/responsive.css">
		   <!-- fevicon -->
		   <link rel="icon" href="../images/fevicon.png" type="image/gif" />
		   <!-- Scrollbar Custom CSS -->
		   <link rel="stylesheet" href="../css/jquery.mCustomScrollbar.min.css">
		   <!-- Tweaks for older IEs-->
		   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
		   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
		   <!--[if lt IE 9]>
		   <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		   <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->   
		       <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />  

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link rel="stylesheet" href="../csssss/style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <!-- site metas -->
       <meta name="keywords" content="">
       <meta name="description" content="">
       <meta name="author" content="">
       <!-- bootstrap css -->
       <link rel="stylesheet" href="../css/bootstrap.min.css">
       <!-- style css -->
       <link rel="stylesheet" href="../css/style.css">
       <!-- Responsive-->
       <link rel="stylesheet" href="../css/responsive.css">
       <!-- fevicon -->
       <link rel="icon" href="../images/fevicon.png" type="image/gif" />
       <!-- Scrollbar Custom CSS -->
       <link rel="stylesheet" href="../css/jquery.mCustomScrollbar.min.css">
       <!-- Tweaks for older IEs-->
       <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
       <!--[if lt IE 9]>
       <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
       <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->   
       <style>
        .mx-auto {
            width: 1155px
        }

        .card {
            margin-top: 5px;
        }
        </style>
</head>
<body class="main-layout inner_header about_page">
	
	<!-- header -->
	<header>
	  <!-- header inner -->
	  <div class="header">
		 <div class="container">
			<div class="row">
			   <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
				  <div class="full">
					 <div class="center-desk">
						<div class="logo">
						 <a href="#" class="logo"> <i class="fas fa-lightbulb"></i> Admin Farmagic </a>
						</div>
					 </div>
				  </div>
			   </div>
			   <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
				  <nav class="navigation navbar navbar-expand-md navbar-dark ">
					 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
					 <span class="navbar-toggler-icon"></span>
					 </button>
					 <div class="collapse navbar-collapse" id="navbarsExample04">
						<ul class="navbar-nav mr-auto">
						  <li class="nav-item">
							  <a class="nav-link" href="../Admin/home.php">Beranda</a>
						   </li>
						   <li class="nav-item ">
							  <a class="nav-link" href="../Berita/formadd.php">Berita</a>
						   </li>					
						   <li class="nav-item">
							  <a class="nav-link" href="../Fakta/index.php">Fakta Menarik</a>
						   </li>            
						   <li class="nav-item active">
							  <a class="nav-link" href="../Admin/form.php">Berbagi</a>
						   </li>                                                		  
						   <li class="nav-item">
							  <a class="nav-link" href="../Admin/about.php">Tentang</a>
						   </li>
						   <li class="nav-item d_none">
							  <a class="nav-link" href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
						   </li>
						   <li class="nav-item d_none">
							<a class="nav-link" href="../index.php"><i class="fa fa-sign-out"></i></a>
						 </li>
						</ul>
					 </div>
				  </nav>
			   </div>
			</div>
		 </div>
	  </div>
   </header>
<body>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
</head>

<body>
    <br><br>
    <!--Import Data-->
    <div class="container">
				<h4>Improt Data CSV</h4>
				<form action="" method="POST" enctype="multipart/form-data">
					<input type="file" name="data">
					<input type="submit" name="input" value="INSERT" class="btn btn-primary mt-3">
				</form>
                <a href="chart/chartssss.php" id="generate"> <button type="button" class="btn btn-info">Chart</button></a>
			</div>
		</div>
		</div>
<script type="text/javascript" src="css/bootstrap.min.js"></script>

<?php
	if(isset($_POST['input'])){
		$urut   = 1;
		$datanama  =  $_FILES['data']['name'];
		$datatmp   =  $_FILES['data']['tmp_name'];	
		$exe       =  pathinfo($datanama, PATHINFO_EXTENSION);
		$folder    = 'file/';
         
		if($exe=='xlsx'){
			$upload = move_uploaded_file($datatmp, $folder.$datanama);
			if($upload){
				$open = fopen($folder.$datanama, 'r');
				while (($row = fgetxlsx($open, 1000, ','))!==FALSE ) {
					    $sql = mysqli_query($koneksi,"INSERT INTO cerita
					    VALUES('','".$row[0]."','".$row[1]."','".$row[2]."','".$row[3]."') ")or die('Error: ' . mysqli_error($koneksi));;

				}

			}else{
				echo "Gagal diupload";
			}
		}else{
			echo "Bukan File CSV";
		}

	}
?>
</div>
<br>
<!---->
<div class="container">
    
				<div class="data-tables datatable-dark">
					
                <table class="table" id="mauexport">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Subject</th>
                            <th scope="col">Cerita</th>
                            <th scope="col">Aksi</th>
                        </tr>
                        <tbody>
                            <?php
                            $sql2   = "select * from cerita order by id desc";
                            $q2     = mysqli_query($koneksi,$sql2);
                            $urut   = 1;
                            while($r2 = mysqli_fetch_array($q2)){
                                $id         = $r2['id'];
                                $name       = $r2['name'];
                                $email      = $r2['email'];
                                $subjectt    = $r2['subjectt'];
                                $message    = $r2['message'];
                           ?>
                            <tr>
                                <th scope="row"> <?php echo $urut++ ?></th>
                                <td scope="row"><?php echo $name?></td>
                                <td scope="row"><?php echo $email?></td>
                                <td scope="row"><?php echo $subjectt?></td>
                                <td scope="row"><?php echo $message?></td>
                                <td scope="row">
                                    <a href="formm.php?op=edit&id=<?php echo $id ?>"><button type="button" class="btn btn-warning">Edit</button></a>
                                    <a href="formm.php?op=delete&id=<?php echo $id?>" onclick="return confirm('Yakin mau hapus data?')"><button type="button" class="btn btn-danger">Delete</button></a>            
                                </td>
                            </tr>

                           <?php

                           
                            }
                            ?>
                        </tbody>
                    </thead>
                </table>
					
				</div>
</div>
	
<script>
$(document).ready(function() {
    $('#mauexport').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy','csv','excel', 'pdf', 'print'
        ]
    } );
} );

</script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>

	

</body>

</html>