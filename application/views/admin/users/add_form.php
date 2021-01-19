<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("admin/includes/head.php") ?>
    <title>Tambah User</title>
</head>

<body>
    <div id="main-wrapper" data-navbarbg="skin6" data-theme="light" data-layout="vertical" data-sidebartype="full" data-boxed-layout="full">
        <?php $this->load->view("admin/includes/header.php") ?>
        <?php $this->load->view("admin/includes/sidebar.php") ?>
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <?php if ($this->session->flashdata('success')) : ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $this->session->flashdata('success'); ?>
                    </div>
                <?php endif; ?>
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Tambah User</h4>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card card-body">
                                <h4 class="card-title mb-4">Tambah User</h4>
                                <form class="form-horizontal m-t-30" action="<?= base_url('admin/user/tambah') ?>" method="post">
                                    <div class="form-group">
                                        <label for="nama">Username*</label>
                                        <input type="text" class="form-control <?php echo form_error('username') ? 'is-invalid' : '' ?>" name="username" placeholder="Masukan Username">
                                        <div class="invalid-feedback">
                                            <?php echo form_error('username') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="latitude">password*</label>
                                        <input type="password" class="form-control <?php echo form_error('password') ? 'is-invalid' : '' ?>" name="password" placeholder="Masukan Password">
                                        <div class="invalid-feedback">
                                            <?php echo form_error('password') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-dark">Tambah</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php $this->load->view("admin/includes/footer.php") ?>
        </div>
    </div>
    <?php $this->load->view("admin/includes/js.php") ?>
</body>

</html>