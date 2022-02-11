<div class="container" id="Login_V">

    <!-- Outer Row -->

    <div class="card o-hidden border-0 shadow-lg mt-5 " id="card">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="p-5">

                        <br>
                        <br>
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4"><strong>Login</strong></h1>
                        </div>

                        <?= $this->session->flashdata('message'); ?>


                        <form class="user" action="<?= base_url('auth'); ?>" method="POST">

                            <div class="form-group ">
                                <input type="text" class="form-control form-control-user" id="email" name="email" aria-describedby="emailHelp" placeholder="Email" autocomplete="off" value="<?= set_value('email'); ?>">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>

                            <div class="form-group pt-3">
                                <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                                <span style="" id="mybutton" onclick="change()"><i class="far fa-eye"></i></span>

                                <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>

                            <a href="#" class="lupa">lupa password?</a>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn">
                                    Login
                                </button>
                            </div>

                            <p class="text-center">belum mempunyai akun?
                                <a href="<?= base_url('auth/registration'); ?>" class="regis"> Register</a>
                            </p>

                    </div>
                </div>
                <div class="col-lg-6 d-none d-lg-block">
                    <img width="100%" src="<?php echo base_url(); ?>/assets/image/Login.svg" alt="">
                </div>

            </div>
        </div>
    </div>

</div>
<script>
    function change() {
        var x = document.getElementById('password').type;

        if (x == 'password') {
            document.getElementById('password').type = 'text';
            document.getElementById('mybutton').innerHTML = '<i class="far fa-eye-slash"></i>';
        } else {
            document.getElementById('password').type = 'password';
            document.getElementById('mybutton').innerHTML = '<i class="far fa-eye"></i>';
        }
    }
</script>