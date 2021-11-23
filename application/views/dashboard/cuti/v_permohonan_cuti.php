<!-- content -->
<div class="container-fluid p-0 d-flex align-items-center" style="width: 1184px; height:60px; background: #FCFCFC;">
    <nav aria-label="breadcrumb" class="m-4">
        <ol class="breadcrumb bg-transparent p-0 mt-1 mb-0">
            <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
            <li class="breadcrumb-item"><a href="#">Cuti</a></li>
            <li class="breadcrumb-item active" aria-current="page">Permohonan Cuti</li>
        </ol>
    </nav>
</div>
<main class="content">

    <div class="container-fluid p-0 ">
       

        <!-- Daftar Semua Lowongan -->
        <div class="container-fluid p-0">

            <div class="card shadow mb-4 ">
                <div class="card-header py-3">
                    <!-- <h6 class="m-0 font-weight-bold text-primary">Management User</h6> -->
                    <h1 class="m-0 font-weight-bold ">Daftar Semua Permohonan Cuti</h1>
                </div>
                <div class="card-body ">
                    <div class="table-responsive">
                        <table class="table table-bordered text-center" id="dataTable" width="100%"  style="max-width:100%; white-space:nowrap;" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Karyawan</th>
                                    <th>Tgl Pengajuan</th>
                                    <th>Lama Cuci</th>
                                    <th>Sisa Cuti</th>                                    
                                    <th>Tgl Cuti</th>                                    
                                    <th>Akhir Cuti</th>                                    
                                    <th>Keterangan Cuti</th>                                    
                                    <th>Status</th>                                    
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                               
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</main>
<!-- End Content -->
<script>
     $(document).ready(function() {
         $('#dataTable').DataTable({
             "scrollX": true

         });
     });
 </script>