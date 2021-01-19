<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('admin/includes/head.php') ?>
    <title>Settings</title>
</head>

<body>
    <div id="main-wrapper" data-navbarbg="skin6" data-theme="light" data-layout="vertical" data-sidebartype="full" data-boxed-layout="full">
        <?php $this->load->view("admin/includes/header.php") ?>
        <?php $this->load->view("admin/includes/sidebar.php") ?>
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Settings</h4>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="col-12">
                    <div class="card card-body">
                        <form class="form-horizontal m-t-30" action="" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?= $this->session->userdata('user_logged')->id ?>">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="username" class="form-control <?= form_error('username') ? 'is-invalid' : '' ?>" name="username" value="<?= $this->session->userdata('user_logged')->username ?>" readonly>
                                <div class="invalid-feedback">
                                    <?= form_error('username') ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password">New Password</label>
                                <input type="password" class="form-control <?= form_error('password') ? 'is-invalid' : '' ?>" name="password">
                                <div class="invalid-feedback">
                                    <?= form_error('password') ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-dark">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php $this->load->view("admin/includes/footer.php") ?>
    </div>
    <?php $this->load->view("admin/includes/js.php") ?>
</body>

</html>