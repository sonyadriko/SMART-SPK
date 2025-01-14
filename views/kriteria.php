<?php
include '../config/database.php';

// Fetch total weight from the database
$totalBobotQuery = "SELECT SUM(bobot_kriteria) AS total_bobot FROM kriteria";
$totalBobotResult = mysqli_query($conn, $totalBobotQuery);
$totalBobotData = mysqli_fetch_assoc($totalBobotResult);
$totalBobot = $totalBobotData['total_bobot'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard</title>

    <!-- Vendor CSS -->
    <link href="../assets/lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="../assets/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="../assets/lib/select2/css/select2.min.css" rel="stylesheet">
    <link href="../assets/lib/datatables.net-dt/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="../assets/lib/datatables.net-responsive-dt/css/responsive.dataTables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/bracket.css">
</head>

<body>
    <?php include 'partials/sidebar.php'; ?>
    <?php include 'partials/header.php'; ?>

    <div class="br-mainpanel">
        <div class="br-pagetitle">
            <h4>Data Kriteria</h4>
        </div>
        <div class="br-pagebody">
            <div class="br-section-wrapper">
                
                <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Kriteria</th>
                                <th>Bobot</th>
                                <th>Bobot Normalisasi</th>
                                <th>Aksi</th>
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
                                $bobotNormalisasi = $bobot / $totalBobot; // Normalisasi bobot
                            ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo htmlspecialchars($nama); ?></td>
                                <td><?php echo htmlspecialchars($bobot); ?></td>
                                <td><?php echo round($bobotNormalisasi, 2) ?></td>
                                <td>
                                    <a href='edit_kriteria.php?GetID=<?php echo $id; ?>'
                                        class="btn btn-primary">Edit</a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <span>Nilai bobot harus berupa angka bulat dalam rentang 1 hingga 100.
Bobot 1 menunjukkan tingkat kepentingan yang paling rendah, sedangkan bobot 100 menunjukkan tingkat kepentingan yang paling tinggi.
Jika Anda memasukkan nilai di luar rentang tersebut atau format tidak valid, sistem akan meminta Anda untuk mengulang input.
Silakan masukkan bobot yang sesuai untuk melanjutkan.</span>
                </div>
            </div>
        </div>
        <?php include 'partials/footer.php'; ?>
    </div>

    <script src="../assets/lib/jquery/jquery.min.js"></script>
    <script src="../assets/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/lib/select2/js/select2.full.min.js"></script>
    <script src="../assets/lib/datatables.net-dt/js/jquery.dataTables.min.js"></script>
    <script src="../assets/lib/datatables.net-responsive-dt/js/responsive.dataTables.min.js"></script>
    <script>
    $(function() {
        $('#datatable1').DataTable({
            responsive: true,
            language: {
                searchPlaceholder: 'Search...',
                sSearch: '',
                lengthMenu: '_MENU_ items/page',
            }
        });
        $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });
    });
    </script>
</body>
</html>
