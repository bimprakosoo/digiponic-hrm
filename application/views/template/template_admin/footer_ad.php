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
<!-- <script>
    // Data Picker Initialization
    $('.datepicker').datepicker();
</script> -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.getElementById("datetimepicker-dashboard").flatpickr({
            inline: true,
            prevArrow: "<span class=\"fas fa-chevron-left\" title=\"Previous month\"></span>",
            nextArrow: "<span class=\"fas fa-chevron-right\" title=\"Next month\"></span>",
        });
    });
</script>
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