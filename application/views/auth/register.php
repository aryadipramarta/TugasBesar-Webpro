<div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 col mx-auto">
        <div class="card-body p-0">
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                        <img src="<?= base_url('assets/image/register.png') ?>" class="img-register">
                            <h2 class="title-register">CREATE AN ACCOUNT !</h2>
                        </div>
                        <form class="user" method="post" action="<?= base_url('auth/register'); ?>">
                            <div class="form-group">
                                <input type="text" class="register-form" name="name" id="name" placeholder="Full Name" value="<?= set_value('name'); ?>">
                                <small class="text-danger">
                                    <?= form_error('name');  ?>
                                </small>
                            </div>
                            <div class="form-group">
                                <input type="text" class="register-form" name="username" id="username" placeholder="Username" value="<?= set_value('username'); ?>">
                                <small class="text-danger">
                                    <?= form_error('username');  ?>
                                </small>
                            </div>
                            <div class="form-group">
                                <input type="email" class="register-form" name="email" id="email" placeholder="Email Address" value="<?= set_value('email'); ?>">
                                <small class="text-danger">
                                    <?= form_error('email');  ?>
                                </small>
                            </div>
                            <div class="form-group">

                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="register-form" id="password" name="password" placeholder="Password">
                                    <small class="text-danger">
                                        <?= form_error('password');  ?>
                                    </small>
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="register-form" id="check_password" name="check_password" placeholder="Repeat Password">
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                            <button type="submit" class="btn_register">Register Account</button>
                            </div>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="reg_link" href="<?= base_url('auth'); ?>">Already have an account? Login!</a>
                            <br>
                            <a class="reg_link" href="<?= site_url('') ?>">Back to homepage</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>