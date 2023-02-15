<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>RZ</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../../companyprofile/assets/img/favicon.png" rel="icon">
  <link href="../../companyprofile/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../../companyprofile/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../../companyprofile/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../companyprofile/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../../companyprofile/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../../companyprofile/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../../companyprofile/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../../companyprofile/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../../companyprofile/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha - v4.10.0
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <!-- assets2 -->
  <link rel="stylesheet" href="../../companyprofile/atlantis.min.css">
</head>


    <body>
        <!-- ======= Header ======= -->
  <header id="header" class="bg-dark ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="../index.php">SCHOOL</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="../index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="about.php">About</a></li>
          <li><a class="nav-link scrollto active" href="list.php">Data Siswa</a></li>
          <li><a class="getstarted scrollto" href="#">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>
  <!-- End Header -->
<br>
   

            <div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Tambah Data</div>
								</div>
								<div class="card-body">
									<div class="row">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<div class="col-md-6 col-lg-5">
										<form action="insert.php" method="post"  enctype="multipart/form-data">
											<div class="form-group">
												<label for="nama">Nama</label>
												<input type="text" name="nama" class="form-control"  placeholder="Nama" required>
												
											</div>
											<div class="form-group">
												<label for="alamat">Alamat</label>
												<textarea name="alamat" class="form-control"  rows="3" placeholder="Alamat" required></textarea>
											</div>
										
											<div class="form-check">
												<label>Jenis Kelamin</label></br>
												<label class="form-radio-label">
													<input class="form-radio-input" type="radio" name="jenis_kelamin" value="Laki-Laki"  checked="">
													<span class="form-radio-sign">Laki-Laki</span>
												</label>
												<label class="form-radio-label ml-3">
													<input class="form-radio-input" type="radio" name="jenis_kelamin" value="Perempuan">
													<span class="form-radio-sign">Perempuan</span>
												</label>
											</div>
											<br><br>
											
											<button type="submit" class="btn btn-success text-light">Tambah Data</button>
										</div>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<div class="col-md-6 col-lg-5">
											<div class="form-group">
												<label for="umur">Umur</label>
                                                <input type="text" name="umur" class="form-control" required placeholder="Input Angka" onkeypress="return hanyaAngka(event)">												
											</div>

                                            <div class="form-group">
												<label for="email">Email</label>
                                                <input type="email" name="email" class="form-control" required placeholder="Email">											
											</div>
                                                <br><br><br>
                                            <div class="form-group">
                                                <label for=foto><b>Foto :</b></label>
                                                <input type="file" name="foto" required="required">
                                                <p style="color: red"><b> Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif </b></p>
                                            </div>	
											</form>
		                                </div>
                                    </div>
                                </div>
                            </div>
                        </div>


					
    

						<div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../../companyprofile/assets/vendor/aos/aos.js"></script>
  <script src="../../companyprofile/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../companyprofile/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../../companyprofile/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../../companyprofile/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../../companyprofile/assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="../../companyprofile/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../../companyprofile/assets/js/main.js"></script>
    
</html>