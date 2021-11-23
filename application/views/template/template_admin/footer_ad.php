<footer class="footer ">
    <div class="container-fluid ">
        <div class="row text-muted ">
            <div class="col-6 text-left ">
                <p class="mb-0 ">
                    <a href="index.html " class="text-muted "><strong>AdminKit Demo</strong></a> &copy;
                </p>
            </div>
            <div class="col-6 text-right ">
                <ul class="list-inline ">
                    <li class="list-inline-item ">
                        <a class="text-muted " href="# ">Support</a>
                    </li>
                    <li class="list-inline-item ">
                        <a class="text-muted " href="# ">Help Center</a>
                    </li>
                    <li class="list-inline-item ">
                        <a class="text-muted " href="# ">Privacy</a>
                    </li>
                    <li class="list-inline-item ">
                        <a class="text-muted " href="# ">Terms</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
</div>
</div>

<script src="<?php echo base_url(); ?>assets/admin2/static/js/app.js "></script>
<script src="<?php echo base_url(); ?>assets/admin2/static/js/todo.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>

<!-- <script>
    // Data Picker Initialization
    $('.datepicker').datepicker();
</script> -->

<script type="text/javascript">
    $(document).ready(function() {
        $(".add-more").click(function() {
            var html = $(".copy").html();
            $(".after-add-more").after(html);
        });

        // saat tombol remove dklik control group akan dihapus 
        $("body").on("click", ".remove", function() {
            $(this).parents(".control-group").remove();
        });
    });
</script>

</body>

</html>