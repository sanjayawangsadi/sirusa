<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("admin/includes/head.php") ?>
    <title>Tambah Lokasi</title>
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
                        <h4 class="page-title">Tambah Data</h4>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card card-body">
                                <h4 class="card-title mb-4">Tambah Data</h4>
                                <form class="form-horizontal m-t-30" action="<?= base_url('admin/peta/tambah') ?>" enctype="multipart/form-data" method="post">
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" class="form-control <?php echo form_error('nama') ? 'is-invalid' : '' ?>" name="nama" placeholder="Masukan Nama Tempat">
                                        <div class="invalid-feedback">
                                            <?php echo form_error('nama') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="latitude">Latitude</label>
                                        <input type="text" class="form-control <?php echo form_error('latitude') ? 'is-invalid' : '' ?>" name="latitude" placeholder="Masukan Latitude">
                                        <div class="invalid-feedback">
                                            <?php echo form_error('latitude') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="longitude">Longitude</label>
                                        <input type="text" class="form-control <?php echo form_error('longitude') ? 'is-invalid' : '' ?>" name="longitude" placeholder="Masukan Longitude">
                                        <div class="invalid-feedback">
                                            <?php echo form_error('longitude') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <textarea class="form-control <?php echo form_error('alamat') ? 'is-invalid' : '' ?>" name="alamat" rows="5"></textarea>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('alamat') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="thumbnail">Thumbnail</label>
                                        <input type="file" class="form-control <?php echo form_error('thumbnail') ? 'is-invalid' : '' ?>" name="thumbnail">
                                        <div class="invalid-feedback">
                                            <?php echo form_error('thumbnail') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="telepon">Telepon</label>
                                        <input type="text" class="form-control <?php echo form_error('telepon') ? 'is-invalid' : '' ?>" name="telepon" placeholder="Masukan telepon">
                                        <div class="invalid-feedback">
                                            <?php echo form_error('telepon') ?>
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
            </div>
            <?php $this->load->view("admin/includes/footer.php") ?>
        </div>
    </div>
    <?php $this->load->view("admin/includes/js.php") ?>
</body>

</html>