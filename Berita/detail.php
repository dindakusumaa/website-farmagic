<?php
include "connect.php"
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Farmagic</title>
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="viewport" content="initial-scale=1, maximum-scale=1" />
    <meta content="Free HTML Templates" name="keywords" />
    <meta content="Free HTML Templates" name="description" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link rel="stylesheet" href="csssss/style.css" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- site metas -->
    <title>Farmagic</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css" />
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css" />
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen" />
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script
    ><![endif]-->
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
                    <a href="#" class="logo"> <i class="fas fa-lightbulb"></i> Farmagic </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
              <nav class="navigation navbar navbar-expand-md navbar-dark">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarsExample04">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                      <a class="nav-link" href="index.html">Beranda</a>
                    </li>
                    <li class="nav-item active">
                      <a class="nav-link" href="berita.html">Berita</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="fakta.html">Fakta Menarik</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="form.html">Berbagi</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="about.html">Tentang</a>
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
    <!-- end header -->

    <!-- header section ends -->

    <section class="heading-link">
      <h3>Berita</h3>
      <p><a href="index.html">Beranda</a><a href="berita.html"> / Berita</a><a href="berita6.html"> / Selengkapnya</a></p>
    </section>
    <?php
    $id_berita = $_GET["id_berita"] ;
    $sql = "SELECT * FROM berita join kberita on kberita.id_kategori = berita.id_kategori WHERE id_berita = '$id_berita'";
    $query = mysqli_query($conn, $sql);
    
    while ($row = mysqli_fetch_object($query)) {
    ?> 
    <section class="about">
      <div class="image">
        <img src="gambar/<?php echo $row->gambar?>" alt="" />
      </div>
      <div class="content">
        <h3 class="about-title"><?php echo $row->judul; ?></h3>
        <h4>Kategori : <?php echo $row->nama_kategori?></h4>
        <p><?php echo $row->isi ;?></p>
      </div>
    </section>
    <?php
    }?>
    <footer>
      <div class="footer">
        <div class="container">
          <div class="row">
            <div class="col-xl-5 col-lg-3 col-md-6 col-sm-6">
              <h3><i class="fas fa-lightbulb"></i> Farmagic</h3>
              <ul class="about_us">
                <li>Website Farmagic ini membantu petani milenial untuk mengembangkan inovasi pertanian guna menghadapi berbagai tantangan kedepannya pada pasca pandemi ini.</li>
              </ul>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
              <h3>Sitemap</h3>
              <ul class="link_menu">
                <li><a href="index.html">Beranda</a></li>
                <li><a href="berita.html">Berita</a></li>
                <li><a href="fakta.html">Fakta Menarik</a></li>
                <li><a href="berbagi.html">Berbagi</a></li>
                <li><a href="about.html">Tentang</a></li>
              </ul>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
              <h3>Media Sosial</h3>
              <ul class="social_icon">
                <li>
                  <a href="https://twitter.com/farmagic1"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </li>
                <li>
                  <a href="https://www.instagram.com/farmagic01/?next=%2F"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="copyright">
          <div class="container">
            <div class="row">
              <div class="col-md-10 offset-md-1">
                <p>© 2022 All Rights Reserved. Design by <a href="about.html">Farmagic</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- end footer -->

    <!-- swiper js link  -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>
  </body>
</html>
