<?php include "connect.php";?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Farmagic</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- CSS -->
      <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
      <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css">
    
    <!-- data Fuison -->
    <script type="text/javascript" src="./js/fusioncharts.js"></script>
    <script type="text/javascript" src="./js/themes/fusioncharts.theme.fint.js"></script>
        <script type="text/javascript">
            FusionCharts.ready(function(){
                    var revenueChart = new FusionCharts({
                        "type":"column3d",
                        "renderAt":"datafusion",
                        "width": "1000",
                        "height":"400",
                        "dataFormat":"jsonurl",
                        "dataSource": "db2json.php"
                    });
                    revenueChart.render();
                }
            )
      </script>
  </head>
  <body>
  <html>
	<head>
		<meta charset="utf-8">
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
                              <li class="nav-item active">
                                 <a class="nav-link" href="formadd.php">Berita</a>
                              </li>					
                              <li class="nav-item">
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
<?php
if(isset($_SESSION['pesan'])){

  echo "<h4>".$_SESSION['pesan']."</h4>";
  unset($_SESSION['pesan']);
}
?>
<form action="add.php" method="post"  enctype="multipart/form-data">
<div class="mb-3">
  <label for="formFile" class="form-label">Import File</label>
  <input class="form-control" type="file" id="formFile" name="exel_file">
  <button type="submit" class="btn btn-success mt-3" name="save_exel_file">Simpan</button>
</div>
</form>
<div class="container text-center">
  <div id="datafusion"></div>
</div>
<div class="text-center mt-3 mb-3">
  <h6>Data Dalam Tabel</h6>
</div>
<table id="tabel" class="table">
  <thead class="table-success">
    <tr>
        <th>No.</th>
        <th>ID Berita</th>
        <th>Judul Berta</th>
        <th>Kategori</th>
        <th>Gambar</th>
        <th>Aksi</th>
        
    </tr>
  </thead>
  <tbody>
    <?php
    $sql ='SELECT * FROM berita join kberita on kberita.id_kategori = berita.id_kategori';
    $query = mysqli_query($conn, $sql) ;
    $i = 1;

    while ($row = mysqli_fetch_object($query)) {
    ?>
    <tr>
        <td><?php echo $i++, '.';?></td>
        <td><?php echo $row->id_berita; ?></td>
        <td><?php echo $row->judul; ?></td>
        <td><?php echo $row->nama_kategori; ?></td>
        <td class="text-center"><img width="200px" src="./gambar/<?php echo $row->gambar?>" alt=""> <br> Nama Gambar : <?php echo $row->gambar; ?></td>
        
        <td>
          <a href="edit.php?id_berita=<?php echo $row->id_berita;?>" class='btn btn-warning btn-sm'>Ubah</a>
          
          <a href="deleteberita.php?id_berita=<?php echo $row->id_berita;?>" class='btn btn-danger btn-sm' onclick="return confirm('Apakah anda yakin untuk menghapus berita?')">hapus</a>
        </td>
    </tr>
    <?php
    }
    if (! mysqli_num_rows($query)){
            echo '<tr> <td colspan="6" class="text-center"> TIDAK ADA DATA </td></tr>';
    }
    ?>
  </tbody>
</table>

</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.print.min.js"></script>
<script>
  $(document).ready(function() {
    $('#tabel').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
</script>  

  </body>


</html>