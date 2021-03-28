<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content />
    <meta name="author" content />
    <title>Login | SYMA Decoration</title>
    <link href="<?= base_url(); ?>assets/css/styles.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <link rel="icon" type="image/x-icon" href="<?= base_url(); ?>assets/img/ic_symadeco.svg" />
</head>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <!-- Basic login form-->
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header justify-content-center">
                                    <div class="strong form-group d-flex align-items-center justify-content-center mt-4 mb-0">
                                        <img style="width:5%" class="navbar-brand-img ml-3" src="<?= base_url(); ?>assets/img/ic_symadeco.svg"></img>
                                        &nbsp;SYMA Decoration
                                    </div>
                                    <h6 class="font-weight-light text-md-center my-4">Masukan informasi akun Anda</h6>
                                </div>
                                <div class="card-body">
                                    <!-- Login form-->
                                    <form>
                                        <!-- Form Group (email address)-->
                                        <form action="<?= base_url('login/OnLogin') ?>" method="POST"></form>
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputEmailAddress">Email</label>
                                            <input class="form-control py-4" id="inputEmailAddress" type="email" placeholder="Masukan Email" />
                                        </div>
                                        <!-- Form Group (password)-->
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputPassword">Password</label>
                                            <input class="form-control py-4" id="inputPassword" type="password" placeholder="Masukan Password" />
                                        </div>
                                        <!-- Form Group (remember password checkbox)-->
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" />
                                                <label class="custom-control-label" for="rememberPasswordCheck">Remember password</label>
                                            </div>
                                        </div>
                                        <!-- Form Group (login box)-->
                                        <div class="form-group d-flex align-items-center justify-content-center mt-4 mb-0">
                                            <button class="btn btn-primary" onclick="location.href='<?php echo base_url(); ?>Dashboard'">Login</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="footer mt-auto footer-dark">
                <div class="container-fluid">
                    <div class="form-group d-flex align-items-center justify-content-center mt-4 mb-0">
                        <div class="row ">
                            <div class="col-md-50 small mb-1">Copyright &#xA9; SYMA Decoration</div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="<?= base_url(); ?>assets/js/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="<?= base_url(); ?>assets/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="<?= base_url(); ?>assets/js/scripts.js"></script>
</body>

</html