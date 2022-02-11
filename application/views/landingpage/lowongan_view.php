<section class="landLowongan pb-5" id="landLowongan">

  <img src="<?php echo base_url(); ?>assets/image/slide/slide.svg" class="d-block w-100" />

  <div class="container py-5 ">
    <center>
      <h4>Beberapa lowongan pekerjaan yang sedang dibutuhkan, bagi yang minat langsung bisa melamar dibawah ini</h4>
    </center>

  </div>
  <div class="container-fluid ">
    <div class="row d-flex justify-content-center">

      <!-- Earnings (Monthly) Card Example -->
      
      <?php
      foreach ($lowongan as $s) {
      ?>
        <div class="col-xl-4 col-md-6 mb-4">
          <div class="card text-capitalize h-100" style="border-radius: 10px; height:500px;">
            <!-- <div class="d-flex justify-content-center pt-4">
              <img style=" width: 48px; heigth: 50px;" src="<?php echo base_url('assets/image/lowongan/') . $s['image']; ?>" class="card-img-top" />
            </div> -->
            <div class="card-body h-100 text-center pt-3 w-100">
              <h3 class="card-title pt-3"><strong><?php echo $s['nama_lowongan']; ?></strong></h3>
              <div class="card-text " style="text-align: justify;">
                <?php echo $s['deskripsi']; ?>
              </div>

            </div>
            <p class="text-center">Lokasi - <?php echo $s['kota']; ?>, <?php echo $s['provinsi']; ?></p>

            <p class="text-center">
              <strong>Posted Date</strong> <br /> <?php echo $s['post_date']; ?>
            </p>
            <div class="d-grid gap-2 m-2 pb-2">
              <a href="<?php echo base_url("landingpage/lowongan_detail/") . $s['id_lowongan']; ?>" class="btn btn-primary">
                Lihat Selengkapnya
              </a>
            </div>
          </div>
        </div>
      <?php
      }
      ?>
    </div>
  </div>
</section>