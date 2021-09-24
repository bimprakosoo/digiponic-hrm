<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5 " id="card">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                    <div class="col-lg-6">
                            <div class="p-5">
                                <br>
                                <br>
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-3">Register</h1>
                            </div>
                            <form class="user">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user"
                                        id="user" name="user" aria-describedby="usernameHelp"
                                        placeholder="Username" autocomplete="off">
                                </div>
                                <div class="form-group pt-3">
                                    <input type="text" class="form-control form-control-user"
                                        id="email" name="email" aria-describedby="emailHelp"
                                        placeholder="Email" autocomplete="off">
                                </div>
                                <div class="form-group pt-3">
                                    <input type="password" class="form-control form-control-user"
                                        id="pwd" name="pwd" placeholder="Password">
                                </div> 
                                <a href="#" class="lupa">lupa password?</a>                               
                                <a href="#" onclick="proses_login()" id="login"
                                        class="btn btn-primary btn-user btn-block">
                                        Register
                                </a>
                                <p class="text-center">Sudah mempunyai akun?
                                    <a href="<?= base_url();?>Login" class="regis"> Login</a>
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

    </div>

</div>