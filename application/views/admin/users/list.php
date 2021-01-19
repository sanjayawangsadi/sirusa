<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("admin/includes/head.php") ?>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/admin/assets/DataTables/datatables.min.css') ?>" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/admin/assets/DataTables/datatables.css') ?>" />
    <title>Users</title>
</head>

<body>
    <div id="main-wrapper" data-navbarbg="skin6" data-theme="light" data-layout="vertical" data-sidebartype="full" data-boxed-layout="full">
        <?php $this->load->view("admin/includes/header.php") ?>
        <?php $this->load->view("admin/includes/sidebar.php") ?>
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Users</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-5 align-self-center mt-3">
                        <form type="hidden" action="<?= base_url('admin/user/tambah') ?>">
                            <button class="btn btn-primary">Tambah User</button>
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
                                            <th scope="col">#</th>
                                            <th scope="col">username</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (!empty($data)) : ?>
                                            <?php $i = 1;
                                            foreach ($data as $value) : ?>
                                                <tr>
                                                    <td><?= $i++ ?></td>
                                                    <td><?= $value->username ?></td>
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
</body>

</html>