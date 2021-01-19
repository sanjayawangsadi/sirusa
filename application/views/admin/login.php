<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('admin/includes/head.php'); ?>
    <title>Login</title>
</head>

<body>
    <div id="main-wrapper" data-navbarbg="skin6" data-theme="light" data-layout="vertical" data-sidebartype="full" data-boxed-layout="full">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-4 mx-auto mt-5">
                    <div class="card">
                        <div class="card-body text-center">
                            <h2>Sirusa</h2>
                        </div>
                        <div class="card-body">
                            <form action="<?= base_url('admin/login') ?>" method="post">
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="username" class="form-control <?php echo form_error('username') ? 'is-invalid' : '' ?>" name="username">
                                    <div class="invalid-feedback">
                                        <?php echo form_error('username') ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control <?php echo form_error('password') ? 'is-invalid' : '' ?>" name="password">
                                    <div class="invalid-feedback">
                                        <?php echo form_error('password') ?>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>