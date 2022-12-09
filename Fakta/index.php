<?php include 'connect.php'; ?>

<!doctype html>
<html lang="en">
  <head>
  <script type="text/javascript" src="js/fusioncharts.js"></script>
        <script type="text/javascript" src="js/themes/fusioncharts.theme.fint.js"></script>
        <script type="text/javascript">
            FusionCharts.ready(function(){
               var revenueChart = new FusionCharts({
                  "type":"column2d",
                  "renderAt":"posisix",
                  "width": "1100",
                  "height":"500",
                  "dataFormat":"jsonurl",
                  "dataSource": "db2json.php"
               });
               revenueChart.render();
            })
        </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Farmagic</title>
		<!-- mobile metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="viewport" content="initial-scale=1, maximum-scale=1">
		<meta content="Free HTML Templates" name="keywords">
		<meta content="Free HTML Templates" name="description">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="colorlib.com">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="../fonts/material-design-iconic-font/css/material-design-iconic-font.css">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="../cssss/style.css">
	</head>
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
		   <title>Farmagic</title>
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
         <link href="../img/Vector.svg" rel="shortcut icon">

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
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link rel="stylesheet" href="../csssss/style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <!-- site metas -->
       <title>Farmagic</title>
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
	</head>
	<body class="main-layout inner_header about_page">

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
                          <li class="nav-item ">
                                 <a class="nav-link" href="../Admin/home.php">Beranda</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="../Berita/formadd.php">Berita</a>
                              </li>					
                              <li class="nav-item active">
                                 <a class="nav-link" href="../Fakta/index.php">Fakta Menarik</a>
                              </li>            
                              <li class="nav-item">
                                 <a class="nav-link" href="../Admin/form.php">Berbagi</a>
                              </li>                                                		  
                              <li class="nav-item ">
                                 <a class="nav-link" href="../Admin/about.php">Tentang</a>
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
     <!-- end header inner -->
    <div class="container">
        <h1 class="mt-3 mb-3">Fakta Menarik</h1>
        <form action="add.php" method="post"  enctype="multipart/form-data">
            <div class="mb-3">
                <label for="formFile" class="form-label">Import File Excel</label>
                <input class="form-control" type="file" id="formFile" name="exel_file">
                <button type="submit" class="btn btn-success mt-3" name="save_exel_file">Simpan</button>
            </div>
        </form>
                </table>
        <div id="posisix"></div>
        <hr>
        <div class="d-grid gap-2 d-md-flex justify-content-md mb-3">
            <a href="formFakta.php" class="btn btn-success">Tambah Data</a>
            <form action="ekspor.php" method="post"  enctype="multipart/form-data">
                    <button type="submit" class="btn btn-success" name="ekspor_exel_file">Ekspor File Excel</button>
            </form>
            <a href="cetak.php" class="btn btn-success">Cetak PDF</a>
        </div>
        <table class="table">
            <thead class="table-info">
                <tr>
                    <th>No.</th>
                    <th>ID Fakta</th>
                    <th>Judul Fakta</th>
                    <th>Kategori</th>
                    <th>Gambar</th>
                    <th>Operasi</th>
                </tr>
            </thead>
            <tbody>
                
                <?php
                    $sql ='SELECT * FROM fakta join kfakta on kfakta.id_kategori = fakta.id_kategori';

                    $query = mysqli_query($conn, $sql);
                    $i = 1;

                    while ($row = mysqli_fetch_object($query)) {
                ?>
                
                <tr>
                    <td><?php echo $i++, '.';?></td>
                    <td><?php echo $row->id_fakta; ?></td>
                    <td><?php echo $row->judul; ?></td>
                    <td><?php echo $row->nama_kategori; ?></td>
                    <td><img width="200px" src="./Gambar/<?php echo $row->gambar?>" alt=""></td>
                    <td>
                        <a class="btn btn-sm btn-warning" href="formFakta.php?id_fakta=<?php echo $row->id_fakta; ?>">Ubah</a>
                        <a class="btn btn-sm btn-danger" href="deleteFakta.php?id_fakta=<?php echo $row->id_fakta; ?>" role="button" onclick="return confirm('Apakah Anda yakin akan menghapus data?');">
                            Hapus
                        </a>
                    </td>
                </tr>

                <?php
                    } if (!mysqli_num_rows($query)) {
                        echo '<tr><td colspan="6" class="text-center">Tidak ada data.</td></tr>';
                    }
                ?>

            </tbody>


<?php include 'footer.php'; ?>