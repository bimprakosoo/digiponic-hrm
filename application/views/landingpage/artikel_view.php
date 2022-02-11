<!-- Awal menu -->

<section class="artikel pb-5" id="artikel">
    <img src="<?php echo base_url(); ?>assets/image/artikel/slide-artikel.svg" class="d-block w-100" />

    <div id="carouselExampleControls" class="carousel slide pt-5" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container-fluid pt-5 ">
                    <div class="row d-flex justify-content-center">
                        <?php
                        foreach ($artikel as $d) {
                        ?>
                            <div class="col-xl-4 col-md-6 mb-4">
                                <div class="card h-100 " style="border-radius: 10px;">
                                    <img src="<?php echo base_url('assets/image/artikel/img/' . $d['image']); ?>" class="card-img-top" style="height: 250px;" alt="...">
                                    <div class="card-body h-100 " style="text-align: justify;">
                                        <h5 class="card-title "><?= $d['judul_artikel'] ?></h5>
                                        <p class="card-text pt-2"><?= $d['isi_artikel'] ?></p>
                                    </div>


                                    <h5 class="card-footer" style="background: #fff;"><small><?= $d['post_date'] ?></small></h5>

                                </div>
                            </div>

                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container-fluid pt-5 ">
                    <div class="row d-flex justify-content-center">
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card " style="border-radius: 10px;">
                                <img src="<?php echo base_url(); ?>assets/image/artikel/artikel.svg" class="card-img-top" alt="...">
                                <div class="card-body text-start pt-5">
                                    <h5 class="card-title ">PT MAJU BERSAMA Menjadi salah satu perusahaan terbaik di provinsi jawa timur</h5>
                                    <p class="card-text pt-5">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.”</p>
                                    <h5 class="card-text py-5"><small>Jan 26, 2021</small></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card " style="border-radius: 10px;">
                                <img src="<?php echo base_url(); ?>assets/image/artikel/artikel.svg" class="card-img-top" alt="...">
                                <div class="card-body text-start pt-5">
                                    <h5 class="card-title ">PT MAJU BERSAMA Menjadi salah satu perusahaan terbaik di provinsi jawa timur</h5>
                                    <p class="card-text pt-5">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.”</p>
                                    <h5 class="card-text py-5"><small>Jan 26, 2021</small></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card " style="border-radius: 10px;">
                                <img src="<?php echo base_url(); ?>assets/image/artikel/artikel.svg" class="card-img-top" alt="...">
                                <div class="card-body text-start pt-5">
                                    <h5 class="card-title ">PT MAJU BERSAMA Menjadi salah satu perusahaan terbaik di provinsi jawa timur</h5>
                                    <p class="card-text pt-5">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.”</p>
                                    <h5 class="card-text py-5"><small>Jan 26, 2021</small></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center align-items-center py-5">
        <div class="btn-group">
            <button type="button" class="carousel-control-prev mx-4" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span aria-hidden="true"><img src="<?php echo base_url(); ?>assets/image/prev.svg"></span>
            </button>
            <button type="button" class="carousel-control-next mx-4" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span aria-hidden="true"><img src="<?php echo base_url(); ?>assets/image/next.svg"></span>
            </button>
        </div>
    </div>
</section>