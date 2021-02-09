<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://kawalcorona.com/data/css/newstyle.css" rel="stylesheet">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title></title>

  </head>
  <body >
    <?php
        $datapositif = file_get_contents("https://api.kawalcorona.com/positif");
        $positif = json_decode($datapositif, TRUE);
        $datasembuh = file_get_contents("https://api.kawalcorona.com/sembuh");
        $sembuh = json_decode($datasembuh, TRUE);
        $datameninggal = file_get_contents("https://api.kawalcorona.com/meninggal");
        $meninggal = json_decode($datameninggal, TRUE);
        $dataid = file_get_contents("https://api.kawalcorona.com/indonesia");
        $id = json_decode($dataid, TRUE);
        $dataidprovinsi = file_get_contents("https://api.kawalcorona.com/indonesia/provinsi");
        $idprovinsi = json_decode($dataidprovinsi, TRUE);
        $datadunia= file_get_contents("https://api.kawalcorona.com/");
        $dunia = json_decode($datadunia, TRUE);
    ?>
  

  <div class="bg-light">
  <div class="container ">
            <div class="row">
                <div class="col-sm">
                <br><a href="home"><img src="{{asset('assets/img/logo-ehi.png')}}" width="200" height="70" ></a><br><br>
        <nav class="navbar navbar-light bg-white" style="background-color: #E43510;">
        </nav>
  
    </div>
    </div>
         <div class="container " >
   
   
            <div class="row">
                <div class="col-sm">
                <div class="alert bg-success img-card box-secondary-shadow" role="alert">
                <div class="text-white">
                <h1 class="font-weight-bolder text-white mb-0"><center> Kawal Corona </center> </h1>
                    </div>
                </div>
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
            <h2 class="mb-0 number-font"><?php echo $positif['value'] ?></h2>
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
            <h2 class="mb-0 number-font"><?php echo $sembuh['value'] ?></h2>
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
            <h2 class="mb-0 number-font"><?php echo $meninggal['value'] ?></h2>
            <p class="text-white mb-0">ORANG</p>
           </div>
           <div class="ml-auto"> <img src="{{asset('assets/img/emoji-LWx.png')}}" width="50" height="50" alt="Positif"> </div>
          </div>
         </div>
        </div>
       </div><!-- COL END -->
       <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card  bg-orange img-card box-success-shadow">
         <div class="card-body">
          <div class="d-flex">
           <div class="text-white">
            <h2 class="text-white mb-0">INDONESIA</h2>
            <p class="mb-0 number-font"><?php echo $id[0]['positif'] ?>&nbsp; POSITIF,<?php echo $id[0]['sembuh'] ?>SEMBUH, <?php echo $id[0]['meninggal'] ?>MENINGGAL</p>
           </div>
           <div class="ml-auto"> <img src="{{asset('assets/img/indonesia-PZq.png')}}" width="50" height="50" alt="Positif"> </div>
          </div>
         </div>
        </div>
       </div><!-- COL END -->
     </div>
     <br>
                         


    
    </div>
                       
    <div class="row">
     <div class="col-sm">
      <div class="card">
            <div class="card-header ">
                    <h3 class="card-title">Data Kasus Corona Virus Di Dunia</h3>
                    </div>
                     <div class="card-body" >
                         <div style="height:600px;overflow:auto;margin-right:15px;">
                                 <table class="table table-striped"  fixed-header  >
                                 <thead>
                                     <tr>
                                     <th scope="col">No</th>
                                     <th scope="col">Negara</th>
                                     <th scope="col">Positif</th>
                                     <th scope="col">Sembuh</th>
                                     <th scope="col">Meninggal</th>
                                     </tr>
                                 </thead>
                                 <tbody>
             
                                 @php
                                     $no = 1;    
                                 @endphp
                                 <?php
                                     for ($i= 0; $i <= 23; $i++){
             
                                     
                                     ?>
                                 <tr>
                                     <td> <?php echo $i+1 ?></td>
                                     <td> <?php echo $dunia[$i]['attributes']['Country_Region'] ?></td>
                                     <td> <?php echo $dunia[$i]['attributes']['Confirmed'] ?></td>
                                     <td><?php echo $dunia[$i]['attributes']['Recovered']?></td>
                                     <td><?php echo $dunia[$i]['attributes']['Deaths']?></td>
                                 </tr>
                                     <?php 
                                 
                                 } ?>
                                 </tbody>
                                 </table>
                                
                               
                     </div>
                   </div>
      <div class="card-header ">
       <h3 class="card-title">Data Kasus Corona Virus di Indonesia Berdasarkan Provinsi</h3>
       </div>
        <div class="card-body" >
            <div style="height:600px;overflow:auto;margin-right:15px;">
                    <table class="table table-striped"  fixed-header  >
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Provinsi</th>
                        <th scope="col">Positif</th>
                        <th scope="col">Sembuh</th>
                        <th scope="col">Meninggal</th>
                        </tr>
                    </thead>
                    <tbody>

                    @php
                        $no = 1;    
                    @endphp
                    <?php
                        for ($i= 0; $i <= 23; $i++){
                        
                        ?>
                    <tr>
                        <td> <?php echo $i+1 ?></td>
                        <td> <?php echo $idprovinsi[$i]['attributes']['Provinsi'] ?></td>
                        <td> <?php echo $idprovinsi[$i]['attributes']['Kasus_Posi'] ?></td>
                        <td> <?php echo $idprovinsi[$i]['attributes']['Kasus_Semb'] ?></td>
                        <td> <?php echo $idprovinsi[$i]['attributes']['Kasus_Meni'] ?></td>
                    </tr>
                        <?php 
                    
                    } ?>
                    </tbody>
                    </table>
                   
                  
        </div>
      </div>
     </div>
                    <div>
                    <br>
                    <div class="row">
       <div class="col-md-12 col-xl-6">
        <a href="https://www.unicef.org/indonesia/id/coronavirus">
        <div class="card text-white bg-orange">
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
                    <!-- FOOTER -->
                    </div>
                    <div class="container">
   <footer>
   <div class="footer border-top-0 footer-1">
          <div class="container">
           <div class="row align-items-center">
            <div class="social">
             <ul class="text-center">
              <li>
               <a class="social-icon" href="https://fb.me/ethicalhack.id" target="_blank"><i class="fa fa-facebook"></i></a>
              </li>
              <li>
               <a class="social-icon" href="https://instagram.com/ethicalhack.id" target="_blank"><i class="fa fa-instagram"></i></a>
              </li>
             </ul>
            </div>
            <div class="col-lg-12 col-sm-12 mt-3 mt-lg-0 text-center">
                                                    
             Use Cascading Style Sheets from Kawalcorona.com </a>. Made with <svg class="bi bi-heart-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" clip-rule="evenodd"/>
</svg> by <a href="https://www.instagram.com/" target="_blank"></a>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div><!-- COL-END -->
     </div>
   </footer>
             </div>
                  
                              
        <!-- Optional JavaScript -->
        
        <script src="//code.jquery.com/jquery.js"></script>
        <!-- DataTables -->
        <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>