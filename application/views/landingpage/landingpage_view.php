<!-- Carusoel -->
<section class="slider">
  <div class="slider w-100">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="<?php echo base_url(); ?>/assets/image/slide/slide-1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="<?php echo base_url(); ?>/assets/image/slide/slide-2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="<?php echo base_url(); ?>/assets/image/slide/slide-3.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
</section>
<!-- End Carusoel -->

<!-- Tentang -->
<section class="landTentang" id="landTentang">
  <h2>
    Tentang Kami
  </h2>
  <?= $this->session->flashdata('hasil');     ?>
  <div class="container d-flex justify-content-center">
    <div class="card mb-3 py-5">
      <div class="row g-0">
        <div class="col-md-4 d-flex justify-content-center">
          <img src="<?php echo base_url(); ?>assets/image/landingpage/tentang.svg" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title text-start">PT MAJU BERSAMA</h5>
            <p class="card-text text-start">PT. MAJU BERSAMA perusahaan yang telah berdiri sejak tahun dengan berbagai bidang kegiatan.
              Perusahaan kami berdiri dengan motto “memberikan kepuasan kepada relasi”
              sebagai acuan dalam bekerja sehingga kami mendapat kepercayaan penuh dalam mengembangkan bisnis. </p>
            <a href="<?php echo base_url(); ?>LandingPage/tentang" class="btn btn-primary">Selengkapnya</a>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>
<!-- End TenTang -->

<!-- Departemen -->
<section class="landDepartemen" id="landDepartemen">
  <h2 class="pt-5">
    Departemen
  </h2>

  <div class="container-fluid pt-5 px-5 mx-auto">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      <?php
      foreach ($dept as $d) {
      ?>
        <div class="col">
          <div class="card h-100" style="border-radius: 10px;">
            <img src="<?php echo base_url('assets/image/departemen/foto/' . $d['image']); ?>" class="card-img-top " style="height: 250px;" alt="...">
            <div class="card-body h-100 pt-5" style="text-align:justify;">
              <h5 class="card-title ">Departemen <?= $d['nama'] ?></h5>
              <p class="card-text"><?= $d['deskripsi'] ?></p>
            </div>
            <button type="button" data-bs-toggle="modal" data-bs-target="#departemenModal" class="btn btn-primary">
              Lihat Selengkapnya
            </button>
          </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="departemenModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Departemen</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>

              <div class="modal-body">
                <div class="text-center">
                  <h4>Departemen <?= $d['nama'] ?></h4>
                </div>
                <div class="container text-center">
                  <h5>Fungsi</h5>
                  <?= $d['fungsi'] ?>
                </div>
                <div class="container text-start">
                  <h5 class="text-center">Peran</h5>
                  <?= $d['peran'] ?>
                </div>

              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>

      <?php
      }
      ?>
      <!-- <div class="col">
        <div class="card " style="border-radius: 10px;">
          <img src="<?php echo base_url(); ?>assets/image/departemen/departemen-penunjang.svg" class="card-img-top" alt="...">
          <div class="card-body text-start pt-5">
            <h5 class="card-title ">Departemen Satuan Pengawasan Internal</h5>
            <p class="card-text pt-5">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.”</p>
          </div>
          <button type="button" data-bs-toggle="modal" data-bs-target="#departemenModal" class="btn btn-primary">
            Lihat Selengkapnya
          </button>
        </div>
      </div>
      <div class="col">
        <div class="card" style="border-radius: 10px;">
          <img src="<?php echo base_url(); ?>assets/image/departemen/departemen-penunjang.svg" class="card-img-top" alt="...">
          <div class="card-body text-start pt-5">
            <h5 class="card-title ">Departemen Satuan Pengawasan Internal</h5>
            <p class="card-text pt-5">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.”</p>
          </div>
          <button type="button" data-bs-toggle="modal" data-bs-target="#departemenModal" class="btn btn-primary">
            Lihat Selengkapnya
          </button>
        </div>
      </div>
      <div class="col">
        <div class="card" style="border-radius: 10px;">
          <img src="<?php echo base_url(); ?>assets/image/departemen/departemen-penunjang.svg" class="card-img-top" alt="...">
          <div class="card-body text-start pt-5">
            <h5 class="card-title ">Departemen Satuan Pengawasan Internal</h5>
            <p class="card-text pt-5">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.”</p>
          </div>
          <button type="button" data-bs-toggle="modal" data-bs-target="#departemenModal" class="btn btn-primary">
            Lihat Selengkapnya
          </button>
        </div>
      </div> -->
    </div>
  </div>
  <div class="d-grid gap-2 col-6 mx-auto pb-5">
    <a href="<?php echo base_url(); ?>LandingPage/departemen" class="btn btn-primary">Selengkapnya</a>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="departemenModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Detail Karyawan</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
          <div class="text-center">
            <h4>Departemen Akutansi dan Keuangan</h4>
          </div>
          <div class="container text-center">
            <h5>Fungsi</h5>
            <p>Keuangan mengatur dana perusahaan agar secara efektif digunakan untuk memaksimalkan keuntungan usaha sekaligus menjaga
              penggunaan dana tersebut secara efisien dan akuntansi bertugas mengumpulkan bukti-bukti segala jenis
              transaksi yang telah terjadi atau akan terjadi (berdasarkan metode akrual), mencatat dan mengelompokkannya,
              mudian membuat laporan keuangan perusahaan sesuai dengan prinsip-prinsip Akuntansi yang berlaku umum atau
              Standar Akuntansi Keuangan yang berlaku.</p>
          </div>
          <div class="container text-start">
            <h5 class="text-center">Peran</h5>
            <p>
              1. Akuntansi keuangan, berkaitan dengan mencatat semua transaksi, menggunakan sistem pembukuan entri ganda dan menyiapkan laporan keuangan. <br>
              2. Sistem keuangan, menganalisis kebutuhan informasi keuangan organisasi dan meninjau sistem yang ada dan bertanggung jawab atas desain dan pemeliharaan sistem keuangan.<br>
              3. Penganggaran, berkaitan dengan analisis dan kontrol informasi keuangan untuk membantu operasi sehari-hari perusahaan. <br>
              4. Penggajian <br>
              5. Treasuri dan perencanaan keuangan <br>
              6. Perpajakan, menangani semua urusan perpajakan. <br>
            </p>
          </div>

        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Departemen -->

<!-- Karyawan -->
<section class="landKaryawan" id="landKaryawan">
  <div class="container py-5">
    <h2>
      Karyawan Berprestasi
    </h2>
    <p>
      Inilah beberapa karyawan yang bekerja di PT MAJU BERSAMA
    </p>

  </div>


  <div class="container-fluid px-5">
    <div class="row">

      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 pb-2" style="border-radius: 10px;">
          <img src="<?php echo base_url(); ?>assets/image/karyawan/karyawan-foto.svg" class="card-img-top" alt="...">
          <div class="card-body text-start">
            <div class="row justify-content-between">
              <div class="col-6 text-start">
                Nama
              </div>
              <div class="col-6 text-end">
                Sean zayn
              </div>
            </div>
            <div class="row justify-content-between pt-2">
              <div class="col-6 text-start">
                Departemen
              </div>
              <div class="col-6 text-end">
                Produksi
              </div>
            </div>
            <div class="row justify-content-between pt-2 pb-3">
              <div class="col-6 text-start">
                Divisi
              </div>
              <div class="col-6 text-end">
                Operation
              </div>
            </div>
            <div class="d-flex justify-content-center">
              <button type="button" data-bs-toggle="modal" data-bs-target="#karyawanModal" class="btn btn-primary">
                Lihat Selengkapnya
              </button>
            </div>
          </div>
        </div>
      </div>

      <!-- Earnings (Annual) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 pb-2" style="border-radius: 10px;">
          <img src="<?php echo base_url(); ?>assets/image/karyawan/karyawan-foto.svg" class="card-img-top" alt="...">
          <div class="card-body text-start">
            <div class="row justify-content-between">
              <div class="col-6 text-start">
                Nama
              </div>
              <div class="col-6 text-end">
                Sean zayn
              </div>
            </div>
            <div class="row justify-content-between pt-2">
              <div class="col-6 text-start">
                Departemen
              </div>
              <div class="col-6 text-end">
                Produksi
              </div>
            </div>
            <div class="row justify-content-between pt-2 pb-3">
              <div class="col-6 text-start">
                Divisi
              </div>
              <div class="col-6 text-end">
                Operation
              </div>
            </div>
            <div class="d-flex justify-content-center">
              <button type="button" data-bs-toggle="modal" data-bs-target="#karyawanModal" class="btn btn-primary">
                Lihat Selengkapnya
              </button>
            </div>
          </div>
        </div>
      </div>

      <!-- Tasks Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 pb-2" style="border-radius: 10px;">
          <img src="<?php echo base_url(); ?>assets/image/karyawan/karyawan-foto.svg" class="card-img-top" alt="...">
          <div class="card-body text-start">
            <div class="row justify-content-between">
              <div class="col-6 text-start">
                Nama
              </div>
              <div class="col-6 text-end">
                Sean zayn
              </div>
            </div>
            <div class="row justify-content-between pt-2">
              <div class="col-6 text-start">
                Departemen
              </div>
              <div class="col-6 text-end">
                Produksi
              </div>
            </div>
            <div class="row justify-content-between pt-2 pb-3">
              <div class="col-6 text-start">
                Divisi
              </div>
              <div class="col-6 text-end">
                Operation
              </div>
            </div>
            <div class="d-flex justify-content-center">
              <button type="button" data-bs-toggle="modal" data-bs-target="#karyawanModal" class="btn btn-primary">
                Lihat Selengkapnya
              </button>
            </div>
          </div>
        </div>
      </div>

      <!-- Pending Requests Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 pb-2" style="border-radius: 10px;">
          <img src="<?php echo base_url(); ?>assets/image/karyawan/karyawan-foto.svg" class="card-img-top" alt="...">
          <div class="card-body text-start">
            <div class="row justify-content-between">
              <div class="col-6 text-start">
                Nama
              </div>
              <div class="col-6 text-end">
                Sean zayn
              </div>
            </div>
            <div class="row justify-content-between pt-2">
              <div class="col-6 text-start">
                Departemen
              </div>
              <div class="col-6 text-end">
                Produksi
              </div>
            </div>
            <div class="row justify-content-between pt-2 pb-3">
              <div class="col-6 text-start">
                Divisi
              </div>
              <div class="col-6 text-end">
                Operation
              </div>
            </div>
            <div class="d-flex justify-content-center">
              <button type="button" data-bs-toggle="modal" data-bs-target="#karyawanModal" class="btn btn-primary">
                Lihat Selengkapnya
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="d-grid gap-2 col-6 mx-auto pb-5">
      <a href="<?php echo base_url(); ?>LandingPage/karyawan" class="btn btn-primary">Selengkapnya</a>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="karyawanModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Detail Karyawan</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="container px-4">
            <div class="row gx-5">
              <div class="col d-flex justify-content-center">
                <div class="p-3 ">
                  <img src="<?php echo base_url(); ?>assets/image/karyawan/karyawan-foto.svg" style="border-radius: 10px;" />

                </div>
              </div>

              <div class="col">
                <div class="p-3 ">
                  <div class="row justify-content-between">
                    <div class="col-6 text-start">
                      Nama
                    </div>
                    <div class="col-6 text-end">
                      Sean zayn
                    </div>
                  </div>
                  <div class="row justify-content-between pt-2">
                    <div class="col-6 text-start">
                      Departemen
                    </div>
                    <div class="col-6 text-end">
                      Produksi
                    </div>
                  </div>
                  <div class="row justify-content-between pt-2">
                    <div class="col-6 text-start">
                      Alamat
                    </div>
                    <div class="col-6 text-end">
                      Jl. Surabaya, Ijen, Lowokwaru, Malang
                    </div>
                  </div>
                  <div class="row justify-content-between pt-2">
                    <div class="col-6 text-start">
                      Tanggal Lahir
                    </div>
                    <div class="col-6 text-end">
                      20-09-1997
                    </div>
                  </div>
                  <div class="row justify-content-between pt-2 pb-3">
                    <div class="col-6 text-start">
                      Divisi
                    </div>
                    <div class="col-6 text-end">
                      Operation
                    </div>
                  </div>
                  <div class="row justify-content-between pt-2">
                    <div class="col-6 text-start">
                      Golongan
                    </div>
                    <div class="col-6 text-end">
                      A
                    </div>
                  </div>
                  <div class="row justify-content-between pt-2">
                    <div class="col-6 text-start">
                      Posisi
                    </div>
                    <div class="col-6 text-end">
                      Staff
                    </div>
                  </div>
                  <div class="row justify-content-between pt-2">
                    <div class="col-6 text-start">
                      Penempatan
                    </div>
                    <div class="col-6 text-end">
                      Cabang A
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Karyawan -->

<!-- Lowongan -->
<section class="landLowongan" id="landLowongan">
  <div class="container py-5">
    <h2>
      Lowongan
    </h2>
    <p>
      Beberapa lowongan pekerjaan yang sedang dibutuhkan, bagi yang minat langsung bisa melamar dibawah ini
    </p>
  </div>

  <div class="container px-5">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      <?php
      foreach ($lowongan as $s) {
      ?>
        <div class="col">
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
      <!-- <div class="col">
        <div class="card " style="border-radius: 10px;">
          <div class="d-flex justify-content-center pt-4" style="width: 100%;">
            <img style=" width: 48px; heigth: 50px;" src="<?php echo base_url(); ?>assets/image/lowongan/icon-analityc.svg" class="card-img-top" />
          </div>
          <div class="card-body text-start pt-5">
            <h5 class="card-title text-center">Accounting staff</h5>
            <p class="card-text">
              Melakukan pencatatan, penginputan, pengarsipan dokumen, dan
              penyusunan laporan keuangan dan perpajakan.
            </p>
            <p>Lokasi - Malang</p>
            <p>
              <strong>Posted Date</strong> <br /> 11 September 2021
            </p>
            <div class="d-grid gap-2">
              <a href="<?php echo base_url(); ?>karyawan/lowongan_detail" class="btn btn-primary">
                Lihat Selengkapnya
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card " style="border-radius: 10px;">
          <div class="d-flex justify-content-center pt-4" style="width: 100%;">
            <img style=" width: 48px; heigth: 50px;" src="<?php echo base_url(); ?>assets/image/lowongan/icon-analityc.svg" class="card-img-top" />
          </div>
          <div class="card-body text-start pt-5">
            <h5 class="card-title text-center">Accounting staff</h5>
            <p class="card-text">
              Melakukan pencatatan, penginputan, pengarsipan dokumen, dan
              penyusunan laporan keuangan dan perpajakan.
            </p>
            <p>Lokasi - Malang</p>
            <p>
              <strong>Posted Date</strong> <br /> 11 September 2021
            </p>
            <div class="d-grid gap-2">
              <a href="<?php echo base_url(); ?>karyawan/lowongan_detail" class="btn btn-primary">
                Lihat Selengkapnya
              </a>
            </div>
          </div>
        </div>
      </div> -->
    </div>
  </div>
  <div class="selengkapnya d-grid gap-2 col-6 mx-auto pt-1">
    <a href="<?php echo base_url(); ?>LandingPage/lowongan" class="btn btn-primary">Selengkapnya</a>
  </div>

</section>
<!-- End Lowongan -->

<!-- Artikel -->
<section id="landArtikel1" >
  <div class="container py-5">
    <h2 style="padding-top: 30px;
    font-weight: 700;
    color: #000;
    text-align: center;">
      Artikel
    </h2> 
    <p class="text-center">
      Beberapa artikel tentang pentang perusahaan yang bisa anda baca
    </p>
  </div>

  <div class="container-fluid pt-5 px-5">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 d-flex justify-content-center">

      <?php
      foreach ($artikel as $d) {
      ?>
        <div class="col">
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

      <!-- <div class="col">
        <div class="card " style="border-radius: 10px;">
          <img src="<?php echo base_url(); ?>assets/image/artikel/artikel.svg" class="card-img-top" alt="...">
          <div class="card-body text-start pt-5">
            <h5 class="card-title ">PT MAJU BERSAMA Menjadi salah satu perusahaan terbaik di provinsi jawa timur</h5>
            <p class="card-text pt-5">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.”</p>
            <h5 class="card-text "><small>Jan 26, 2021</small></h5>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card " style="border-radius: 10px;">
          <img src="<?php echo base_url(); ?>assets/image/artikel/artikel.svg" class="card-img-top" alt="...">
          <div class="card-body text-start pt-5">
            <h5 class="card-title ">PT MAJU BERSAMA Menjadi salah satu perusahaan terbaik di provinsi jawa timur</h5>
            <p class="card-text pt-5">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.”</p>
            <h5 class="card-text "><small>Jan 26, 2021</small></h5>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card " style="border-radius: 10px;">
          <img src="<?php echo base_url(); ?>assets/image/artikel/artikel.svg" class="card-img-top" alt="...">
          <div class="card-body text-start pt-5">
            <h5 class="card-title ">PT MAJU BERSAMA Menjadi salah satu perusahaan terbaik di provinsi jawa timur</h5>
            <p class="card-text pt-5">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.”</p>
            <h5 class="card-text "><small>Jan 26, 2021</small></h5>
          </div>
        </div>
      </div> -->
    </div>
  </div>

  <div class="d-grid gap-2 col-6 mx-auto py-5">
    <a href="<?php echo base_url(); ?>LandingPage/artikel" class="btn btn-primary">Selengkapnya</a>
  </div>
</section>
<!-- End Artikel -->

<!-- Kontak -->
<section class="landKontak" id="landKontak">
  <div class="container py-5">
    <h2>
      Kontak Kami
    </h2>
  </div>

  <div class="container px-4 py-4">
    <div class="row gx-5">
      <div class="col">
        <div class="p-3 ">
          <h4>Kontak Informasi</h4>
          <div class="jalan pt-5">
            <div class="d-inline pe-2">
              <img src="<?php echo base_url(); ?>assets/image/hubungi/lokasi.svg" />
            </div>
            <div class="d-inline">Jl. Raya Tidar No.100, Karangbesuki,
              Kec. Sukun, Kota Malang, Jawa Timur</div>
          </div>
          <div class="tlpn pt-4">
            <div class="d-inline pe-2">
              <img src="<?php echo base_url(); ?>assets/image/hubungi/tlpn.svg" />
            </div>
            <div class="d-inline">021 6010948/ 6269552/ 62203958</div>
          </div>
          <div class="mailo pt-4">
            <div class="d-inline pe-2">
              <img src="<?php echo base_url(); ?>assets/image/hubungi/email.svg" />
            </div>
            <div class="d-inline">MajuJaya@gmail.com</div>
          </div>
          <div class="wa py-4">
            <div class="d-inline pe-2">
              <img src="<?php echo base_url(); ?>assets/image/hubungi/wa.svg" />
            </div>
            <div class="d-inline">085282832341</div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="HubungiKami p-3">
          <h4>Hubungi Kami</h4>
          <form class="row g-3 pt-5">
            <div class="col-md-6">
              <input type="text" class="form-control" id="NamaLengkap" placeholder="Nama Lengkap">
            </div>
            <div class="col-md-6">
              <input type="text" class="form-control" id="Notlpn" placeholder="No. Telp/WA">
            </div>
            <div class="col-12">
              <input type="email" class="form-control" id="Email" placeholder="Email">
            </div>
            <div class="col-12">
              <input type="text" class="form-control" id="Subjek" placeholder="Subjek">
            </div>
            <div class="col-12">
              <textarea class="form-control" id="TextAreaPesan" rows="4" placeholder="Pesan"></textarea>
            </div>
            <div class="col-12 d-flex justify-content-end">
              <button type="submit" class="kirim btn btn-primary">Kirim</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Kontak -->