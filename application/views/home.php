<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('includes/head.php') ?>
    <link href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <title>Home</title>
</head>

<body>
    <?php $this->load->view('includes/navbar.php') ?>
    <div class="container">
        <div class="jumbotron jumbotron-fluid pt-8 pb-8 mt-4 text-center">
            <div class="container">
                <h1 class="display-4">Sistem Informasi Geografis</h1>
                <p class="lead">Rumah Sakit Rujukan Covid-19 Kota Bandung</p>
            </div>
        </div>
        <div class="table">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $value) : ?>
                    <tr>
                        <td><?= $value->nama ?></td>
                        <td><a href="<?= base_url('home/view/'.$value->slug) ?>">Show</a></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php $this->load->view('includes/footer.php') ?>
    <?php $this->load->view('includes/js.php') ?>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
</body>

</html>