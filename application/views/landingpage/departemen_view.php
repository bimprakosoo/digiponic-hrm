<img src="<?php echo base_url(); ?>assets/image/departemen/departemen.svg" class="d-block w-100" />

<!-- Awal menu -->
<section class="landDepartemen" id="landDepartemen">

  <div class="container-fluid">
    <h4 class="text-center py-5">Struktur Departemen</h4>

    <img src="<?php echo base_url(); ?>assets/image/departemen/departemen-struktur.svg" alt="" class="container d-flex justify-content-center">

    <h4 class="text-center pb-5" id="daftarDept">Daftar Departemen</h4>

    <div class="container-fluid">

      <div class="row d-flex justify-content-center pb-5">
        <?php
        foreach ($dept as $d) {
        ?>
          <div class="col-xl-4 col-md-6 mb-4">
            <div class="card h-100" style="border-radius: 10px;">
              <img src="<?php echo base_url('assets/image/departemen/foto/' . $d['image']); ?>" class="card-img-top " style="height: 250px;" alt="...">
              <div class="card-body h-100 pt-5" style="text-align:justify;">
                <h5 class="card-title ">Departemen <?= $d['nama'] ?></h5>
                <p class="card-text"><?= $d['deskripsi'] ?></p>
              </div>
              <button type="button" data-bs-toggle="modal" data-bs-target="#departemenModal" class="btn btn-primary m-3" >
                Lihat Selengkapnya
              </button>
            </div>
          </div>

          <!-- Modal -->
          <div class="modal fade" id="departemenModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">

                <div class="modal-body ">
                  <div class="text-center pt-3">
                    <h4>Departemen <?= $d['nama'] ?></h4>
                  </div>
                  <div style="text-align:justify;">
                    <h5 class="text-center pt-2">Fungsi</h5>
                    <?= $d['fungsi'] ?>
                  </div>
                  <div style="text-align:justify;">
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
      </div>
    </div>
  
</section>