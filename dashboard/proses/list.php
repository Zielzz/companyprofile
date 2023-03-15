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
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    	<!-- CSS Files -->
	<link rel="stylesheet" href="../../companyprofile/bootstrap.min.css">
	<link rel="stylesheet" href="../../companyprofile/atlantis.min.css">
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="../../companyprofile/demo.css">
	
	<!-- Fonts and icons -->
	<script src="../../companyprofile/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['../../companyprofile/assets2/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

    <!-- <script type="text/javascript"  href="https://code.jquery.com/jquery-3.5.1.js"> </script> -->

    <script type="text/javascript"  src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript"  src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
</head>

<?php

include('../../companyprofile/config/connection.php');

///MEMED GANTENG///

$query = mysqli_query($conn, "SELECT * FROM sign_in");
$results = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>



<body>

  <!-- ======= Header ======= -->
  <header id="header" class="bg-dark ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a style="text-decoration:none" href="../../companyprofile/index.php">SCHOOL</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="../../companyprofile/index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="../../companyprofile/about.php">About</a></li>
          <li><a class="nav-link scrollto active" href="list.php">Data Siswa</a></li>
          <li><a style="text-decoration:none" class="getstarted scrollto" href="#">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>

  </header><!-- End Header -->

  


  <br>
  
    <!-- ======= About Us Section ======= -->
    <div id="about" class="about">
    <div class="col-md-12" data-aos="fade-up">
							<div class="card">
								<div class="card-header">
                                <a href="add.php"><div class="card-title"><button type="button" class="btn btn-success">Tambah Data</button></a>
                                </div>
								</div>
								    <div class="card-body">
									  <div class="table-responsive">
										<table id="basic-datatables" class="display table table-striped table-hover" > 

                      <thead>
												<tr>
													<th>Nama</th>
													<th>Alamat</th>
													<th>Umur</th>
													<th>Jenis Kelamin</th>
													<th>Email</th>
													<th>File</th>
                          <th></th>
												</tr>
											</thead>
                      <tfoot>
												<tr>
                          <th>Nama</th>
													<th>Alamat</th>
													<th>Umur</th>
													<th>Jenis Kelamin</th>
													<th>Email</th>
													<th>File</th>
                          <th></th>
												</tr>
											</tfoot>
                   <tbody>
                
            <?php foreach ($results as $result) :?>

                <tr>
                   
                    <td><?php echo $result['nama']?></td>
                    <td><?php echo $result['alamat']?></td>
                    <td><?php echo $result['umur']?></td>
                    <td><?php echo $result['jenis_kelamin']?></td>
                    <td><?php echo $result['email']?></td>
                    <td>
                        <center>
                    <?php echo "<img src='../../companyprofile/images/$result[foto]' width='35' height='40'>";
                     ?></center>
                     </td>
                        <td>

                        
                        <small class="text-muted"> <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" data-bs-content="Edit" >
                        <a href="edit.php?id=<?php echo $result['id']?>" class="btn btn-link btn-warning btn-lg">
                            <i class="fa fa-edit"></i>
                        </a></small>

                        <small class="text-muted"> <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" data-bs-content="Delete" >
                        <button type="button" class="btn btn-link btn-danger btn-lg" data-bs-toggle="modal" data-bs-target="#hapus<?php echo $result['id']?>">
                            <i class="fas fa-trash"></i>
                        </button></small>

                        <div class="modal fade" id="hapus<?php echo $result['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus data</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <table><tbody><b>Detail</b>
                                <br><br>
                                <tr><td><b>Username</td><td>:</td></b><td><?php echo $result['nama']; ?></td> </tr>
                                <tr><td><b>Alamat</td><td>:</td> </b><td><?php echo $result['alamat']; ?></td></tr>
                                <tr><td><b>Umur</td><td>:</td> </b><td><?php echo $result['umur']; ?></td></tr> 
                                <tr><td><b>Jenis Kelamin</td><td>:</td> </b><td><?php echo $result['jenis_kelamin']; ?> </td></tr>
                                <tr><td><b>Email</td><td>:</td> </b><td><?php echo $result['email']; ?></td></tr>
                                </tbody></table>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <a href="delete.php?id=<?php echo $result['id']?>" class="btn btn-danger">Hapus</a>
                            </div>
                            </div>
                        </div>
                        </div>

                        <small class="text-muted"> <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" data-bs-content="Detail" >
                        <button type="button" class="btn btn-link btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#detail<?php echo $result['id']?>">
                        <i class="fas fa-address-card"></i>
                        </button></small>
                        <div class="modal fade" id="detail<?php echo $result['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Detail data</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <table><tbody><b>Detail</b>
                                <br><br>
                                <tr><td><b>Username</td><td>:</td></b><td><?php echo $result['nama']; ?></td> </tr>
                                <tr><td><b>Alamat</td><td>:</td> </b><td><?php echo $result['alamat']; ?></td></tr>
                                <tr><td><b>Umur</td><td>:</td> </b><td><?php echo $result['umur']; ?></td></tr> 
                                <tr><td><b>Jenis Kelamin</td><td>:</td> </b><td><?php echo $result['jenis_kelamin']; ?> </td></tr>
                                <tr><td><b>Email</td><td>:</td> </b><td><?php echo $result['email']; ?></td></tr>
                                </tbody></table>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Keluar</button>
                            </div>
                            </div>

                              
                    
                </tr>
                

            <?php endforeach;?>
            </tbody>           
            </table><br>

            <table class="table table-bordered">
		
		
		</table>
	            </div>
            </div>
        </div>
    </div>
        <br><br><br><br>
        <!-- End About Us Section -->

    

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            
            </form>
          </div>
        </div>
      </div>
    </div>
    

    <div class="footer-top">
      <div class="container">
        <div class="row">

        <div class="col-lg-4 col-md-6 footer-contact">
            <br><br><br><br>
            <h3>COMPANY</h3>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="about.php">About</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="list.php">Data Siswa</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Login</a></li>
            </ul>
          </div>

          

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Media Sosial Lainya</h4>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Arsha</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

 
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


  <!-- assets2 -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../companyprofile/assets2/js/core/jquery.3.2.1.min.js"></script>
	<script src="../../companyprofile/assets2/js/core/popper.min.js"></script>
	<script src="../../companyprofile/assets2/js/core/bootstrap.min.js"></script>
	<!-- jQuery UI -->
	<script src="../../companyprofile/assets2/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="../../companyprofile/assets2/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
	
	<!-- jQuery Scrollbar -->
	<script src="../../companyprofile/assets2/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
	<!-- Datatables -->
	<script src="../../companyprofile/assets2/js/plugin/datatables/datatables.min.js"></script>
	<!-- Atlantis JS -->
	<script src="../../companyprofile/assets2/js/atlantis.min.js"></script>
	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script >
		$(document).ready(function() {
			$('#basic-datatables').DataTable({
			});

			$('#multi-filter-select').DataTable( {
				"pageLength": 5,
				initComplete: function () {
					this.api().columns().every( function () {
						var column = this;
						var select = $('<select class="form-control"><option value=""></option></select>')
						.appendTo( $(column.footer()).empty() )
						.on( 'change', function () {
							var val = $.fn.dataTable.util.escapeRegex(
								$(this).val()
								);

							column
							.search( val ? '^'+val+'$' : '', true, false )
							.draw();
						} );

						column.data().unique().sort().each( function ( d, j ) {
							select.append( '<option value="'+d+'">'+d+'</option>' )
						} );
					} );
				}
			});

			// Add Row
			$('#add-row').DataTable({
				"pageLength": 5,
			});

			var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

			$('#addRowButton').click(function() {
				$('#add-row').dataTable().fnAddData([
					$("#addName").val(),
					$("#addPosition").val(),
					$("#addOffice").val(),
					action
					]);
				$('#addRowModal').modal('hide');

			});
		});

	</script>

                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
                <script>
                var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
                var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
                return new bootstrap.Popover(popoverTriggerEl)
                })
                </script>
    <script type="text/javascript">
                $(document).ready( function () {
                    $('#example').DataTable();
                } );

            </script>

  

</body>

</html>