<div class="tab-pane fade" id="ditolak">
    <h4 class="mt-3">List Lamaran Masuk</h4>
    <div class="card-body ">
        <div class="table-responsive">
            <table class="table table-striped text-center" id="dataTable" width="100%" style="max-width:100%; white-space:nowrap; border: none !important;" cellspacing="0">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Lowongan</th>
                        <th>Status</th>
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

</div>
</div>
</div>


</main>
<!-- End Content -->
<script>
    $(document).ready(function() {
        $('#dataTable').DataTable({
            "scrollX": true,
            "searching": false

        });
    });
</script>
