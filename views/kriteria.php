<?php
include '../config/database.php';

// Fetch total weight from the database
$totalBobotQuery = "SELECT SUM(bobot_kriteria) AS total_bobot FROM kriteria";
$totalBobotResult = mysqli_query($conn, $totalBobotQuery);
$totalBobotData = mysqli_fetch_assoc($totalBobotResult);
$totalBobot = round($totalBobotData['total_bobot'], 2); // Round to 2 decimal places
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Dashboard</title>

    <!-- Vendor CSS -->
    <link href="../assets/lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="../assets/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="../assets/lib/select2/css/select2.min.css" rel="stylesheet">
    <link href="../assets/lib/datatables.net-dt/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="../assets/lib/datatables.net-responsive-dt/css/responsive.dataTables.min.css" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="../assets/css/bracket.css">
</head>

<body>

    <?php include 'partials/sidebar.php'; ?>
    <?php include 'partials/header.php'; ?>

    <div class="br-mainpanel">
        <div class="br-pagetitle">
            <div>
                <h4>Dashboard</h4>
            </div>
        </div>
        <div class="br-pagebody">
            <div class="br-section-wrapper">
                <h6 class="br-section-label">Data Kriteria</h6>
                <!-- Warning message -->
                <?php if ($totalBobot != 1) : ?>
                <div class="alert alert-warning" role="alert">
                    Bobot harus sama dengan 1!
                </div>
                <?php endif; ?>
                <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap">
                        <thead>
                            <tr>
                                <th class="wd-15p">No</th>
                                <th class="wd-15p">Nama Kriteria</th>
                                <th class="wd-15p">Bobot</th>
                                <th class="wd-15p">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no = 1;
                            $get_data = mysqli_query($conn, "SELECT * FROM kriteria");
                            while ($display = mysqli_fetch_array($get_data)) {
                                $id = $display['id_kriteria'];
                                $nama = $display['nama_kriteria'];
                                $bobot = $display['bobot_kriteria'];
                            ?>
                            <tr>
                                <td class="text-truncate"><?php echo $no; ?></td>
                                <td class="text-truncate"><?php echo htmlspecialchars($nama); ?></td>
                                <td class="text-truncate"><?php echo htmlspecialchars($bobot); ?></td>
                                <td class="text-truncate">
                                    <a href='edit_kriteria.php?GetID=<?php echo $id; ?>'
                                        class="btn btn-primary btn-user">Edit</a>
                                </td>
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
        <?php include 'partials/footer.php'; ?>
    </div><!-- br-mainpanel -->

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

        // Select2
        $('.dataTables_length select').select2({
            minimumResultsForSearch: Infinity
        });
    });
    </script>
</body>

</html>