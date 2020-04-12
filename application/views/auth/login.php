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
                                    <h1 class="h4 text-gray-900 mb-4">Login Page</kh1>
                                </div>
                                <form class="user" method="post" action="<?= base_url('auth') ?>">
                                    <div class="form-group">
                                        <?= $this->session->flashdata('message');  ?>
                                        <input type="text" class="form-control form-control-user" placeholder="Enter Username..." name="username" id="username" value="<?= set_value('username'); ?>">
                                        <small class="text-danger">
                                            <?= form_error('username');  ?>
                                        </small>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" placeholder="Password" name="password" id="password">
                                        <small class="text-danger">
                                            <?= form_error('password');  ?>
                                        </small>
                                    </div>
                                    <button type="submit" class="btn_login">
                                        Login
                                    </button>

                                </form>
                                <hr>
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