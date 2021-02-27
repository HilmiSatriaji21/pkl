<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Kawal Covid | Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets2/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets2/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets2/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets2/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets2/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets2/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets2/vendor/owl.carousel/assets2/owl.carousel.min.css" rel="stylesheet">
  <link href="assets2/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets2/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medilab - v2.1.1
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>


  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="{{url('home')}}">Home</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets2/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          
          <li><a href="#kasus">Data Kasus</a></li>
          <li><a href="#kasusdunia">Data Kasus Dunia</a></li>
          <li><a href="#kasusindonesia">Data Kasus Indonesia</a></li>
          <li><a href="#berita">Berita</a></li>
          <li><a href="#gallery">Foto</a></li>
          <!-- <li class="drop-down"><a href="">Data Negara</a>
            <ul>
              <li><a href="provinsi">Provinsi</a></li>
              <li><a href="kota">Kota</a></li>
              <li><a href="kecamatan">Kecamatan</a></li>
              <li><a href="kelurahan">Kelurahan</a></li>
              <li><a href="rw">Rw</a></li>
              <li><a href="laporan">Laporan Kasus</a></li>
            </ul> -->
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <h1>Welcome to Kawal Covid</h1>
      <h2>Kita Berjuang Bersama Melawan Corona | Sasageyooo!</h2>
    </div>
  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="kasus" class="kasus">
      <div class="container-fluid">
      <div class="container " >
            <div class="row">
                <div class="col-sm">
                </div>
            </div>
            <br>
            <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card bg-danger img-card box-primary-shadow">
         <div class="card-body">
          <div class="d-flex">
           <div class="text-white">
            <p class="text-white mb-0">TOTAL POSITIF</p>
            <h2 class="mb-0 number-font"><?php echo $posglobal['value'] ?></h2>
            <p class="text-white mb-0">ORANG</p>
           </div>
           <div class="ml-auto"> <img src="{{asset('assets/img/sad-u6e.png')}}" width="50" height="50" alt="Positif"> </div>
          </div>
         </div>
        </div>
       </div><!-- COL END -->
       <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card bg-success img-card box-secondary-shadow">
         <div class="card-body">
          <div class="d-flex">
           <div class="text-white">
            <p class="text-white mb-0">TOTAL SEMBUH</p>
            <h2 class="mb-0 number-font"><?php echo $semglobal['value'] ?></h2>
            <p class="text-white mb-0">ORANG</p>
           </div>
           <div class="ml-auto"> <img src="{{asset('assets/img/happy-ipM.png')}}" width="50" height="50" alt="Positif"> </div>
          </div>
         </div>
        </div>
       </div><!-- COL END -->
       <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card  bg-secondary img-card box-success-shadow">
         <div class="card-body">
          <div class="d-flex">
           <div class="text-white">
            <p class="text-white mb-0">TOTAL MENINGGAL</p>
            <h2 class="mb-0 number-font"><?php echo $menglobal['value'] ?></h2>
            <p class="text-white mb-0">ORANG</p>
           </div>
           <div class="ml-auto"> <img src="{{asset('assets/img/emoji-LWx.png')}}" width="50" height="50" alt="Positif"> </div>
          </div>
         </div>
        </div>
       </div><!-- COL END -->
       <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card  bg-info img-card box-success-shadow">
         <div class="card-body">
          <div class="d-flex">
           <div class="text-white">
            <h2 class="text-white mb-0">INDONESIA</h2>
            <p class="mb-0 number-font"><b>{{$positif}}</b> POSITIF, <b>{{$sembuh}}</b> SEMBUH, <b>{{$meninggal}}</b>MENINGGAL</p>
           </div>
           <div class="ml-auto"> <img src="{{asset('assets/img/indonesia-PZq.png')}}" width="50" height="50" alt="Positif"> </div>
          </div>
         </div>
        </div>
       </div><!-- COL END -->
     </div>
     <br>
    </section><!-- End About Section -->
    
            <div class="card-header ">
            &nbsp;
  <section class="showcase">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-1"></div>
      <div class="col-lg-10">
        <div class="card">
        <div class="col text-center">
                                        <h6><br><p>Update terakhir : {{ $tanggal }}</p></h6>
                                    </div> 
        <section id="kasusdunia" class="kasusdunia"><center>
          <div class="card-header">Data Kasus Corona Virus Berdasarkan Negara</div></center>
          <div class="card-body">
            <div style="height:600px;overflow:auto;margin-right:15px;">
            <table class="table table-striped">
                     <div class="card-body" >
                     <thead>
                                            <tr>
                                                <th>NO.</th>
                                                <th>NEGARA</th>
                                                <th>POSITIF</th>
                                                <th>SEMBUH</th>
                                                <th>MENINGGAL</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                            $no = 1;
                                          @endphp
                                            @foreach($dunia as $data)
                                                <tr>     
                                                  <th>{{$no++ }}</th>
                                                  <th> <?php echo $data['attributes']['Country_Region'] ?></th>
                                                  <th> <?php echo number_format($data['attributes']['Confirmed']) ?></th>
                                                  <th><?php echo number_format($data['attributes']['Recovered'])?></th>
                                                  <th><?php echo number_format($data['attributes']['Deaths'])?></th>
                                                </tr>
                                              @endforeach
                                 </tbody>
                                 </table>
                                
                               
                     </div>
                   </div>
                <br>   

<div class="card-header ">
&nbsp;
  <section class="showcase">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-1"></div>
      <div class="col-lg-10">
        <div class="card">
        <section id="kasusindonesia" class="kasusindonesia"><center>
          <div class="card-header">Data Kasus Corona Virus Berdasarkan Provinsi</div></center>
          <div class="card-body">
            <div style="height:600px;overflow:auto;margin-right:15px;">
            <table class="table table-striped">
              <thead>
                <th>No</th>
                <th>Provinsi</th>
                <th>Positif</th>
                <th>Sembuh</th>
                <th>Meninggal</th>
              </thead>
              <tbody>
              @php $no=1; @endphp
                                            @foreach($tampil as $tmp)
                                   
                                        <tr>
                                            <th>{{$no++ }}</th>
                                            <th>{{$tmp->nama_provinsi}}</th>
                                            <th>{{number_format($tmp->Positif)}}</th>
                                            <th>{{number_format($tmp->Sembuh)}}</th>
                                            <th>{{number_format($tmp->Meninggal)}}</th>
                                        </tr>
                @endforeach
                
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
  <br>
  &nbsp;  
  <!-- ROW-2 OPEN -->
  <div class="card-header ">
  <section id="berita" class="berita">
      <div class="container">
      <div class="section-title">
          <h2>Berita</h2>
          <p> laporan tercepat mengenai fakta atau ide terbaru yang benar, menarik dan atau penting bagi sebagian besar khalayak</p>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row no-gutters">
							<div class="col-md-12 col-xl-6">
								<a href="https://www.unicef.org/indonesia/id/coronavirus">
								<div class="card text-white bg-info">
									<div class="card-body">
										<h4 class="card-title">Novel coronavirus (COVID-19): Hal-hal yang perlu Anda ketahui</h4>
										<p class="card-text">Unicef Indonesia</p>
									</div>
								</div>
							</div></a><!-- COL END -->
							<div class="col-md-12 col-xl-6">
								<a href="https://www.kompas.com/tren/read/2020/03/03/183500265/infografik-daftar-100-rumah-sakit-rujukan-penanganan-virus-corona">
								<div class="card text-white bg-secondary">
									<div class="card-body">
										<h4 class="card-title">Daftar 100 Rumah Sakit Rujukan Penanganan Virus Corona</h4>
										<p class="card-text">Kompas</p>
									</div>
								</div>
							</div></a><!-- COL END -->
							<div class="col-md-12 col-xl-6">
								<a href="https://infeksiemerging.kemkes.go.id/">
								<div class="card text-white bg-success">
									<div class="card-body">
										<h4 class="card-title">Media Informasi Resmi Penyakit Infeksi Emerging</h4>
										<p class="card-text">Kementrian Kesehatan </p>
									</div>
								</div>
							</div></a><!-- COL END -->
							<div class="col-md-12 col-xl-6">
								<a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/advice-for-public">
								<div class="card text-white bg-danger">
									<div class="card-body">
										<h4 class="card-title">Coronavirus Disease (COVID-19) Advice for The Public</h4>
										<p class="card-text">WHO</p>
									</div>
								</div>
							</div></a><!-- COL END -->
					</div>
				</div>
				<!-- CONTAINER CLOSED -->
			</div>


    <!-- ======= Why Us Section ======= -->
     

    <!-- ======= About Section ======= -->
    
    <!-- ======= Counts Section ======= -->
    <!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    
    <!-- End Appointment Section -->

    <!-- ======= Departments Section ======= -->
    
    

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container">

        <div class="section-title">
          <h2>Gallery</h2>
          <p>Harapan itu penting karena itu akan membuat hari ini lebih mudah untuk dijalani. Jika kita percaya bahwa hari esok akan lebih baik, kita dapat menguasai hari ini.</p>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row no-gutters">

         

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets2/img/gallery/gallery-2.jpg" class="venobox" data-gall="gallery-item">
                <img src="assets2/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets2/img/gallery/gallery-3.jpg" class="venobox" data-gall="gallery-item">
                <img src="assets2/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

         
          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets2/img/gallery/gallery-5.jpg" class="venobox" data-gall="gallery-item">
                <img src="assets2/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets2/img/gallery/gallery-6.jpg" class="venobox" data-gall="gallery-item">
                <img src="assets2/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

         

        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Contact Section ======= -->
   


  <!-- ======= Footer ======= -->
  <footer id="footer">

  
    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>Medilab</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
    
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets2/vendor/jquery/jquery.min.js"></script>
  <script src="assets2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets2/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets2/vendor/php-email-form/validate.js"></script>
  <script src="assets2/vendor/venobox/venobox.min.js"></script>
  <script src="assets2/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets2/vendor/counterup/counterup.min.js"></script>
  <script src="assets2/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets2/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets2/js/main.js"></script>

</body>

</html>