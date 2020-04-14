<div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">
        <div class=" col-lg-7">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <img src="<?= base_url('assets/image/login.png') ?>" class="img-login">
                                    <h1 class="title-login">LOGIN</kh1>
                                </div>
                                <form class="user" method="post" action="<?= base_url('auth') ?>">
                                    <div class="d-flex justify-content-center">
                                        <i class="fas fa-user"></i>
                                        <?= $this->session->flashdata('message');  ?>
                                        <input type="text" class="form-login" placeholder="Username" name="username" id="username" value="<?= set_value('username'); ?>">
                                        <small class="text-danger">
                                            <?= form_error('username');  ?>
                                        </small>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <i class="fas fa-key"></i>
                                        <input type="password" class="form-login" placeholder="Password" name="password" id="password">
                                        <small class="text-danger">
                                            <?= form_error('password');  ?>
                                        </small>
                                    </div>
                                    <button type="submit" class="btn_login justify-content-center">
                                        Login
                                    </button>

                                </form>
                                <hr class="line-1">
                                <div class="text-center">
                                    <a class="pass_link" href="">Forgot Password?</a>
                                </div>
                                <div class="text-center">
                                    <a class="acc_link" href="<?= base_url('auth/register'); ?>">Create an Account!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>