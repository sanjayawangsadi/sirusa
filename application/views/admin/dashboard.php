<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("admin/includes/head.php") ?>
    <title>Dashboard</title>
</head>

<body>
    <div id="main-wrapper" data-navbarbg="skin6" data-theme="light" data-layout="vertical" data-sidebartype="full" data-boxed-layout="full">
        <?php $this->load->view("admin/includes/header.php") ?>
        <?php $this->load->view("admin/includes/sidebar.php") ?>
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Dashboard</h4>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div id="map" style="height: 450px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php $this->load->view("admin/includes/footer.php") ?>
        </div>
    </div>
    <script>
        function initMap() {
            const map = new google.maps.Map(document.getElementById('map'), {
                center: new google.maps.LatLng(-6.9194755563046115, 107.61692271996029),
                zoom: 13
            });

            let markers = <?= json_encode($markers) ?>;

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

        function doNothing() {}
    </script>
    <script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD_57JDo19HdXkG8u4Is1kQ5_SA5a_yxx4&callback=initMap"></script>
    <?php $this->load->view("admin/includes/js.php") ?>
</body>

</html>