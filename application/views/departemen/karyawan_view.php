<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/custom.css" />

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    
  
  </head>
  <body>
       <!-- Awal menu -->
       <header class=body-warp>
       <nav class="navbar navbar-expand-lg navbar-light fixed-top">
            <div class="container">
                <a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>/assets/image/Logo.svg" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?php echo base_url(); ?>LandingPage">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url(); ?>Tentang/tentang">Tentang</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Departemen
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="<?php echo base_url(); ?>LandingPage/departemen">Departemen</a></li>
                                <li><a class="dropdown-item" href="<?php echo base_url(); ?>LandingPage/karyawan">Karyawan</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url(); ?>LandingPage/Lowongan">Lowongan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url(); ?>LandingPage/artikel">Artikel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url(); ?>LandingPage/kontak">Kontak</a>
                        </li>

                    </ul>
                    <div class="gap-3 ms-auto">
                        <a class="btn btn-outline-light" href="<?php echo base_url(); ?>login">Login</a>
                        <a class="btn btn-success" href="<?php echo base_url(); ?>register">Register</a>
                    </div>
                </div>
            </div>
        </nav>
    <header>

     <!-- Awal menu -->
     <section class="karyawan" id="karyawan">
          
            <!-- <div class="card" >
                <div class="d-flex justify-content-center">
                <img src="<?php echo base_url();?>assets/image/karyawan/karyawan-foto.svg" class="card-img-top"/>
                </div>
              <div class="card-body pb-3">
              <div class="row justify-content-between">
                    <div class="col-6 text-start">
                    Nama  
                    </div>
                    <div class="col-6">
                    Sean zayn
                    </div>
                </div>
                <div class="row justify-content-between pt-2">
                    <div class="col-6 text-start">
                    Departemen  
                    </div>
                    <div class="col-6">
                    Produksi
                    </div>
                </div>
                <div class="row justify-content-between pt-2">
                    <div class="col-6 text-start">
                    Divisi  
                    </div>
                    <div class="col-6">
                    Operation
                    </div>
                </div>
                          <a href="#" class="btn btn-primary">
                            Lihat Karyawan
                          </a> -->
        <!-- </div> -->
          
            <img src="<?php echo base_url();?>assets/image/karyawan/karyawan.svg" class="d-block w-100" />
     
         <div class="container text-center">
        
            <h4>Inilah beberapa karyawan terbaik yang bekerja di PT MAJU BERSAMA</h4>
          
         </div>
         
           <div class="container-fluid pb-5 ">
            <div class="row pt-3">
            <div class="col-sm-3">
                <div class="card " >
                
                    <img src="<?php echo base_url();?>assets/image/karyawan/karyawan-foto.svg" class="card-img-top"/>
                    
                <div class="card-body">
                <div class="row justify-content-between">
                        <div class="col-6 text-start">
                        Nama  
                        </div>
                        <div class="col-6">
                        Sean zayn
                        </div>
                    </div>
                    <div class="row justify-content-between pt-2">
                        <div class="col-6 text-start">
                        Departemen  
                        </div>
                        <div class="col-6">
                        Produksi
                        </div>
                    </div>
                    <div class="row justify-content-between pt-2 pb-3">
                        <div class="col-6 text-start">
                        Divisi  
                        </div>
                        <div class="col-6">
                        Operation
                        </div>
                    </div>
                            <a href="#" class="btn btn-primary">
                                Lihat Selengkapnya
                            </a>
                </div>
                </div>
            </div>
            <div class="col-sm-3">
            <div class="card " >
                
                <img src="<?php echo base_url();?>assets/image/karyawan/karyawan-foto.svg" class="card-img-top"/>
                
                <div class="card-body">
                <div class="row justify-content-between">
                    <div class="col-6 text-start">
                    Nama  
                    </div>
                    <div class="col-6">
                    Sean zayn
                    </div>
                </div>
                <div class="row justify-content-between pt-2">
                    <div class="col-6 text-start">
                    Departemen  
                    </div>
                    <div class="col-6">
                    Produksi
                    </div>
                </div>
                <div class="row justify-content-between pt-2 pb-3">
                    <div class="col-6 text-start">
                    Divisi  
                    </div>
                    <div class="col-6">
                    Operation
                    </div>
                </div>
                            <a href="#" class="btn btn-primary">
                                Lihat Selengkapnya
                            </a>
                </div>
                </div>
            </div>
            <div class="col-sm-3">
            <div class="card " >
                
                <img src="<?php echo base_url();?>assets/image/karyawan/karyawan-foto.svg" class="card-img-top"/>
                
                <div class="card-body">
                <div class="row justify-content-between">
                    <div class="col-6 text-start">
                    Nama  
                    </div>
                    <div class="col-6">
                    Sean zayn
                    </div>
                </div>
                <div class="row justify-content-between pt-2">
                    <div class="col-6 text-start">
                    Departemen  
                    </div>
                    <div class="col-6">
                    Produksi
                    </div>
                </div>
                <div class="row justify-content-between pt-2 pb-3">
                    <div class="col-6 text-start">
                    Divisi  
                    </div>
                    <div class="col-6">
                    Operation
                    </div>
                </div>
                            <a href="#" class="btn btn-primary">
                                Lihat Selengkapnya
                            </a>
                </div>
                </div>
            </div>
            <div class="col-sm-3">
            <div class="card " >
                
                <img src="<?php echo base_url();?>assets/image/karyawan/karyawan-foto.svg" class="card-img-top"/>
                
                <div class="card-body">
                <div class="row justify-content-between">
                    <div class="col-6 text-start">
                    Nama  
                    </div>
                    <div class="col-6">
                    Sean zayn
                    </div>
                </div>
                <div class="row justify-content-between pt-2">
                    <div class="col-6 text-start">
                    Departemen  
                    </div>
                    <div class="col-6">
                    Produksi
                    </div>
                </div>
                <div class="row justify-content-between pt-2 pb-3">
                    <div class="col-6 text-start">
                    Divisi  
                    </div>
                    <div class="col-6">
                    Operation
                    </div>
                </div>
                            <a href="#" class="btn btn-primary">
                                Lihat Selengkapnya
                            </a>
                </div>
                </div>
            </div>
            </div>

            <div class="row pt-3">
          <div class="col-sm-3">
            <div class="card " >
               
                <img src="<?php echo base_url();?>assets/image/karyawan/karyawan-foto.svg" class="card-img-top"/>
                
              <div class="card-body">
              <div class="row justify-content-between">
                    <div class="col-6 text-start">
                    Nama  
                    </div>
                    <div class="col-6">
                    Sean zayn
                    </div>
                </div>
                <div class="row justify-content-between pt-2">
                    <div class="col-6 text-start">
                    Departemen  
                    </div>
                    <div class="col-6">
                    Produksi
                    </div>
                </div>
                <div class="row justify-content-between pt-2 pb-3">
                    <div class="col-6 text-start">
                    Divisi  
                    </div>
                    <div class="col-6">
                    Operation
                    </div>
                </div>
                          <a href="#" class="btn btn-primary">
                            Lihat Selengkapnya
                          </a>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
          <div class="card " >
               
               <img src="<?php echo base_url();?>assets/image/karyawan/karyawan-foto.svg" class="card-img-top"/>
               
             <div class="card-body">
             <div class="row justify-content-between">
                   <div class="col-6 text-start">
                   Nama  
                   </div>
                   <div class="col-6">
                   Sean zayn
                   </div>
               </div>
               <div class="row justify-content-between pt-2">
                   <div class="col-6 text-start">
                   Departemen  
                   </div>
                   <div class="col-6">
                   Produksi
                   </div>
               </div>
               <div class="row justify-content-between pt-2 pb-3">
                   <div class="col-6 text-start">
                   Divisi  
                   </div>
                   <div class="col-6">
                   Operation
                   </div>
               </div>
                          <a href="#" class="btn btn-primary">
                            Lihat Selengkapnya
                          </a>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
          <div class="card " >
               
               <img src="<?php echo base_url();?>assets/image/karyawan/karyawan-foto.svg" class="card-img-top"/>
               
             <div class="card-body">
             <div class="row justify-content-between">
                   <div class="col-6 text-start">
                   Nama  
                   </div>
                   <div class="col-6">
                   Sean zayn
                   </div>
               </div>
               <div class="row justify-content-between pt-2">
                   <div class="col-6 text-start">
                   Departemen  
                   </div>
                   <div class="col-6">
                   Produksi
                   </div>
               </div>
               <div class="row justify-content-between pt-2 pb-3">
                   <div class="col-6 text-start">
                   Divisi  
                   </div>
                   <div class="col-6">
                   Operation
                   </div>
               </div>
                          <a href="#" class="btn btn-primary">
                            Lihat Selengkapnya
                          </a>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
          <div class="card " >
               
               <img src="<?php echo base_url();?>assets/image/karyawan/karyawan-foto.svg" class="card-img-top"/>
               
             <div class="card-body">
             <div class="row justify-content-between">
                   <div class="col-6 text-start">
                   Nama  
                   </div>
                   <div class="col-6">
                   Sean zayn
                   </div>
               </div>
               <div class="row justify-content-between pt-2">
                   <div class="col-6 text-start">
                   Departemen  
                   </div>
                   <div class="col-6">
                   Produksi
                   </div>
               </div>
               <div class="row justify-content-between pt-2 pb-3">
                   <div class="col-6 text-start">
                   Divisi  
                   </div>
                   <div class="col-6">
                   Operation
                   </div>
               </div>
                          <a href="#" class="btn btn-primary">
                            Lihat Selengkapnya
                          </a>
              </div>
            </div>
          </div>
        </div>

        </div>
      </section>
<!-- Akhir menu -->
    <footer id="footer">
      <div class="container-fluid">
        <div class="copyright">
          &copy;21
          <span>
            PT. Maju Bersama - Nelongso.com - All rights reserved.
            <br />
            Develop by
          </span>
          <span id="digi"> Digiponic.co.id</span>
        </div>

        <div class="credits">
          <div class="social-links">
            <a href="#" class="twitter">
              <img src="<?php echo base_url();?>assets/image/Footer/Foot01.svg"/>
            </a>
            <a href="#" class="facebook">
              <img src="<?php echo base_url();?>assets/image/Footer/Foot02.svg" />
            </a>
            <a href="#" class="instagram">
              <img src="<?php echo base_url();?>assets/image/Footer/Foot03.svg" />
            </a>
          </div>
        </div>
      </div>
    </footer>

    <script src="<?php echo base_url();?>/assets/js/bootstrap.min.js"></script>
  </body>
</html>