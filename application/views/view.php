<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('includes/head.php') ?>
    <title><?= $data->nama ?></title>
</head>

<body>
    <?php $this->load->view('includes/navbar.php') ?>
    <div class="container">
        <div class="card mt-4">
            <div class="card-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 mt-2">
                            <h2><?= $data->nama ?></h2>
                            <p><?= $data->alamat ?></p>
                            <p><?= $data->telepon ?></p>
                        </div>
                        <div class="col-md-8">
                            <img src="<?= base_url('upload/thumbnail/') ?><?= $data->image ?>" alt="" width="150">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mt-4">
            <div class="card-body">
                <div class="container">

                    <div id="map" style="height: 450px; width: 100%;"></div>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('includes/footer.php') ?>
    <?php $this->load->view('includes/js.php') ?>
    <script>
        function initMap() {
            const map = new google.maps.Map(document.getElementById('map'), {
                center: new google.maps.LatLng(-6.9194755563046115, 107.61692271996029),
                zoom: 13
            });

            let markers = [<?= json_encode($data) ?>];

            for (let i = 0; i < markers.length; i++) {
                let nama = markers[i].nama;
                let point = new google.maps.LatLng(
                    parseFloat(markers[i].lat),
                    parseFloat(markers[i].long));
                let infowindow = new google.maps.InfoWindow({
                    content: nama,
                });
                let marker = new google.maps.Marker({
                    position: point,
                    map: map
                });
                marker.addListener("click", () => {
                    infowindow.open(map, marker);
                });
            }
        }

        function downloadUrl(url, callback) {
            let request = window.ActiveXObject ?
                new ActiveXObject('Microsoft.XMLHTTP') :
                new XMLHttpRequest;

            request.onreadystatechange = function() {
                if (request.readyState == 4) {
                    request.onreadystatechange = doNothing;
                    callback(request, request.status);
                }
            };

            request.open('GET', url, true);
            request.send(null);
        }
    </script>
    <script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD_57JDo19HdXkG8u4Is1kQ5_SA5a_yxx4&callback=initMap"></script>
</body>

</html>