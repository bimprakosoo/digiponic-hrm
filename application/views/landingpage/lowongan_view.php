<section class="lowongan pb-5" id="lowongan">

  <img src="<?php echo base_url(); ?>assets/image/slide/slide.svg" class="d-block w-100" />

  <div class="container py-5 ">
    <center>
      <h4>Beberapa lowongan pekerjaan yang sedang dibutuhkan, bagi yang minat langsung bisa melamar dibawah ini</h4>
    </center>

  </div>
  <div class="container-fluid px-5">
    <div class="row">

      <!-- Earnings (Monthly) Card Example -->
      <?php
      foreach ($lowongan as $s) {
      ?>
        <div class="col-xl-3 col-md-6 mb-4">

          <div class="card border-left-primary text-capitalize  shadow h-100 pb-2" style="border-radius: 10px;">
            <div class="d-flex justify-content-center pt-4" style="width: 100%;">
              <img style="display: block; width: 48px; heigth: 50px;" src="<?php echo base_url('assets/image/lowongan/') . $s['image']; ?>" class="card-img-top" />
            </div>
            <div class="card-body  pb-3">
              <h5 class="card-title"><?php echo $s['nama_lowongan']; ?></h5>
              <div class="text-truncate ">
                <?php echo $s['ket']; ?>
              </div>
              <p>Lokasi - <?php echo $s['lokasi']; ?></p>
              <p>
                <strong>Posted Date</strong> <br /> <?php echo $s['post_date']; ?>
              </p>
              <a href="<?php echo base_url("landingpage/lowongan_detail/") . $s['id_lowongan']; ?>" class="btn btn-primary">
                Lihat Selengkapnya
              </a>
            </div>
          </div>

        </div>
      <?php
      }
      ?>
      <!-- Earnings (Annual) Card Example -->
      <!-- <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 pb-2" style="border-radius: 10px;">
          <div class="d-flex justify-content-center pt-4" style="width: 100%;">
            <img style="display: block; width: 48px; heigth: 50px;" src="<?php echo base_url(); ?>assets/image/lowongan/icon-analityc.svg" class="card-img-top" />
          </div>
          <div class="card-body pb-3">
            <h5 class="card-title">Accounting staff</h5>
            <p class="card-text text-truncate">
              Melakukan pencatatan, penginputan, pengarsipan dokumen, dan
              penyusunan laporan keuangan dan perpajakan.
            </p>
            <p>Lokasi - Malang</p>
            <p>
              <strong>Posted Date</strong> <br /> 11 September 2021
            </p>
            <a href="<?php echo base_url(); ?>admin/lowongan_detail" class="btn btn-primary">
              Lihat Selengkapnya
            </a>
          </div>
        </div>
      </div> -->

      <!-- Tasks Card Example -->
      <!-- <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 pb-2" style="border-radius: 10px;">
          <div class="d-flex justify-content-center pt-4" style="width: 100%;">
            <img style="display: block; width: 48px; heigth: 50px;" src="<?php echo base_url(); ?>assets/image/lowongan/icon-analityc.svg" class="card-img-top" />
          </div>
          <div class="card-body pb-3">
            <h5 class="card-title">Accounting staff</h5>
            <p class="card-text text-truncate">
              Melakukan pencatatan, penginputan, pengarsipan dokumen, dan
              penyusunan laporan keuangan dan perpajakan.
            </p>
            <p>Lokasi - Malang</p>
            <p>
              <strong>Posted Date</strong> <br /> 11 September 2021
            </p>
            <a href="<?php echo base_url(); ?>admin/lowongan_detail" class="btn btn-primary">
              Lihat Selengkapnya
            </a>
          </div>
        </div>
      </div> -->

      <!-- Pending Requests Card Example -->
      <!-- <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 pb-2" style="border-radius: 10px;">
          <div class="d-flex justify-content-center pt-4" style="width: 100%;">
            <img style="display: block; width: 48px; heigth: 50px;" src="<?php echo base_url(); ?>assets/image/lowongan/icon-analityc.svg" class="card-img-top" />
          </div>
          <div class="card-body pb-3">
            <h5 class="card-title">Accounting staff</h5>
            <p class="card-text text-truncate">
              Melakukan pencatatan, penginputan, pengarsipan dokumen, dan
              penyusunan laporan keuangan dan perpajakan.
            </p>
            <p>Lokasi - Malang</p>
            <p>
              <strong>Posted Date</strong> <br /> 11 September 2021
            </p>
            <a href="<?php echo base_url(); ?>admin/lowongan_detail" class="btn btn-primary">
              Lihat Selengkapnya
            </a>
          </div>
        </div>
      </div> -->
    </div>
  </div>
</section>