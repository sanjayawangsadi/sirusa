<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("admin/includes/head.php") ?>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/admin/assets/DataTables/datatables.min.css') ?>" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/admin/assets/DataTables/datatables.css') ?>" />
    <title>Lokasi</title>
</head>

<body>
    <div id="main-wrapper" data-navbarbg="skin6" data-theme="light" data-layout="vertical" data-sidebartype="full" data-boxed-layout="full">
        <?php $this->load->view("admin/includes/header.php") ?>
        <?php $this->load->view("admin/includes/sidebar.php") ?>
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Data Lokasi</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-5 align-self-center mt-3">
                        <form type="hidden" action="<?= base_url('admin/peta/tambah') ?>">
                            <button class="btn btn-primary">Tambah Data</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="table-responsive">
                                <table id="table_id" class="table table-striped table-bordered dt-responsive nowrap">
                                    <thead>
                                        <tr>
                                            <th scope="col">Thumbnail</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Lattitude</th>
                                            <th scope="col">Longitude</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (!empty($data)) : ?>
                                            <?php foreach ($data as $value) : ?>
                                                <tr>
                                                    <td><img src="<?= base_url('upload/thumbnail/') ?><?= $value->image ?>" alt="" width="64"></td>
                                                    <td><?= $value->nama ?></td>
                                                    <td><?= $value->lat ?></td>
                                                    <td><?= $value->long ?></td>
                                                    <td>
                                                        <a href="<?= base_url('admin/peta/edit/'.$value->id) ?>" class="btn btn-primary">Edit</a>
                                                        <button type="hidden" onclick="deleteConfirm('<?= base_url('admin/peta/delete/'.$value->id) ?>')" 
                                                        href="#!" class="btn btn-small btn-danger"> Hapus</button>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php $this->load->view("admin/includes/footer.php") ?>
            <?php $this->load->view("admin/includes/modal.php") ?>
        </div>
    </div>
    <?php $this->load->view("admin/includes/js.php") ?>
    <script type="text/javascript" charset="utf8" src="<?= base_url('assets/admin/assets/DataTables/datatables.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/admin/assets/DataTables/datatables.min.js') ?>"></script>
    <script>
        $(document).ready(function() {
            $('#table_id').DataTable();
        });
    </script>
    <script>
        function deleteConfirm(url) {
            $('#btn-delete').attr('href', url);
            $('#deleteModal').modal();
        }
    </script>
</body>

</html>