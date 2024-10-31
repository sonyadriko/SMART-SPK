<?php
 include '../config/database.php';
 $id = $_GET['GetID'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Detail History</title>

    <!-- vendor css -->
    <link href="../assets/lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="../assets/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="../assets/lib/rickshaw/rickshaw.min.css" rel="stylesheet">
    <link href="../assets/lib/select2/css/select2.min.css" rel="stylesheet">

    <link href="../assets/lib/datatables.net-dt/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="../assets/lib/datatables.net-responsive-dt/css/responsive.dataTables.min.css" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="../assets/css/bracket.css">
</head>

<body>

    <?php include 'partials/sidebar.php' ?>

    <?php include 'partials/header.php' ?>


    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
        <div class="br-pagetitle">
            <div>
                <h4>Handphone</h4>
            </div>
        </div>


        <div class="br-pagebody">
            <div class="br-section-wrapper">
                <h6 class="br-section-label">Data History</h6>
                <div class="table-wrapper">
                    <table id="" class="table display responsive nowrap">
                        <thead>
                            <tr>
                                <th>Nama Handphone</th>
                                <th>Nilai</th>
                                <th>Ranking</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php 
                $no = 1;
                $get_data = mysqli_query($conn, "select * from detail_hasil where hasil_id = '$id'");
                while($display = mysqli_fetch_array($get_data)) {
                    $id = $display['id_detail_hasil'];
                    $nama = $display['nama_handphone'];
                    $nilai_akhir = $display['nilai_akhir'];
                    $ranking = $display['ranking'];
                ?>
                                <td class="text-truncate"><?php echo $nama ?></td>
                                <td class="text-truncate"><?php echo $nilai_akhir ?></td>
                                <td class="text-truncate"><?php echo $ranking ?></td>
                            </tr>
                            <?php
              $no++;
                }
              ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div><!-- br-pagebody -->
        <?php include 'partials/footer.php' ?>
    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

    <script src="../assets/lib/jquery/jquery.min.js"></script>
    <script src="../assets/lib/jquery-ui/ui/widgets/datepicker.js"></script>
    <script src="../assets/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/lib/moment/min/moment.min.js"></script>
    <script src="../assets/lib/peity/jquery.peity.min.js"></script>
    <script src="../assets/lib/rickshaw/vendor/d3.min.js"></script>
    <script src="../assets/lib/rickshaw/vendor/d3.layout.min.js"></script>
    <script src="../assets/lib/rickshaw/rickshaw.min.js"></script>
    <script src="../assets/lib/jquery.flot/jquery.flot.js"></script>
    <script src="../assets/lib/jquery.flot/jquery.flot.resize.js"></script>
    <script src="../assets/lib/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../assets/lib/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="../assets/lib/echarts/echarts.min.js"></script>
    <script src="../assets/lib/select2/js/select2.full.min.js"></script>
    <script src="../assets/lib/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../assets/lib/datatables.net-dt/js/dataTables.dataTables.min.js"></script>
    <script src="../assets/lib/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../assets/lib/datatables.net-responsive-dt/js/responsive.dataTables.min.js"></script>
    <script src="../assets/js/ResizeSensor.js"></script>
    <script src="../assets/js/dashboard.js"></script>
    <script>
    $(function() {
        'use strict';

        $('#datatable1').DataTable({
            responsive: true,
            language: {
                searchPlaceholder: 'Search...',
                sSearch: '',
                lengthMenu: '_MENU_ items/page',
            }
        });

        $('#datatable2').DataTable({
            bLengthChange: false,
            searching: false,
            responsive: true
        });

        // Select2
        $('.dataTables_length select').select2({
            minimumResultsForSearch: Infinity
        });

    });
    </script>
</body>

</html>