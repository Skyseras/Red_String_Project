<?php
require APPROOT . '/views/includes/dashhead.php';
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

<body>
    <div class="container-scroller">
        <?php
        require APPROOT . '/views/includes/dashnav.php';
        ?>
        <div class="main-panel">
            <div class="content-wrapper p-2">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="row g-3 justify-content-center">
                                <div class="col-12 col-sm-12 col-lg-6 mb-3">
                                    <canvas id="myChart1" style="margin: auto;width:100%;max-width:600px"></canvas>

                                    <script>
                                        var xValues = ["Clients", "Particuliers", "Agences"];
                                        var yValues = [<?= count($data['clients']) ?>, <?= count($data['particuliers']) ?>, <?= count($data['agences']) ?>];
                                        var barColors = [
                                            "#1bdbe0",
                                            "#38ce3c",
                                            "#ff4d6b"
                                        ];

                                        new Chart("myChart1", {
                                            type: "pie",
                                            data: {
                                                labels: xValues,
                                                datasets: [{
                                                    backgroundColor: barColors,
                                                    data: yValues
                                                }]
                                            },
                                            options: {
                                                title: {
                                                    display: true,
                                                    text: "Poucentage des utilisateurs"
                                                }
                                            }
                                        });
                                    </script>
                                </div>
                                <div class="col-12 col-sm-12 col-lg-6 mb-3">
                                    <canvas id="myChart2" style="margin: auto;width:100%;max-width:600px"></canvas>

                                    <script>
                                        var xValues = ["Casablanca", "Marrakech", "Rabat", "Tanger"];
                                        var yValues = [<?= count($data['c']) ?>, <?= count($data['m']) ?>, <?= count($data['tan']) ?>, <?= count($data['rab']) ?>];
                                        var barColors = ["#8e32e9", "#ffde73", "#3e4b5b", "orange", "#1bdbe0"];

                                        new Chart("myChart2", {
                                            type: "bar",
                                            data: {
                                                labels: xValues,
                                                datasets: [{
                                                    backgroundColor: barColors,
                                                    data: yValues
                                                }]
                                            },
                                            options: {
                                                legend: {
                                                    display: false
                                                },
                                                title: {
                                                    display: true,
                                                    text: "Propriété par Grandes Villes"
                                                },
                                                scales: {
                                                    yAxes: [{
                                                        ticks: {
                                                            min: 0
                                                        }
                                                    }]
                                                }
                                            }
                                        });
                                    </script>
                                </div>
                            </div>
                            <div class="row g-3 pt-1 justify-content-center">
                                <div class="col-12 col-sm-12 col-lg-6 mb-3">
                                    <canvas id="myChart4" style="margin: auto;width:100%;max-width:600px"></canvas>

                                    <script>
                                        var xValues = ["Propriété en Vente", "Propriété en Location"];
                                        var yValues = [<?= count($data['biensvente']) ?>, <?= count($data['bienslocation']) ?>];
                                        var barColors = [
                                            "#38ce3c",
                                            "#ff4d6b"
                                        ];

                                        new Chart("myChart4", {
                                            type: "doughnut",
                                            data: {
                                                labels: xValues,
                                                datasets: [{
                                                    backgroundColor: barColors,
                                                    data: yValues
                                                }]
                                            },
                                            options: {
                                                title: {
                                                    display: true,
                                                    text: "Pourcentage des biens en Vente/Location"
                                                }
                                            }
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo URLROOT; ?>/js/vendor.bundle.base.js"></script>
    <script src="<?php echo URLROOT; ?>/js/off-canvas.js"></script>
    <script src="<?php echo URLROOT; ?>/js/misc.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

</html>