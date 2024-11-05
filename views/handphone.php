<?php
 include '../config/database.php';
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

    <title>Dashboard</title>

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
                <h6 class="br-section-label">Data Handphone</h6>
                <a href="tambah_handphone.php" class="btn btn-primary mb-2">Tambah Handphone</a>

                <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Handphone</th>
                                <th>Harga</th>
                                <th>RAM</th>
                                <th>ROM</th>
                                <th>Kamera Depan</th>
                                <th>Kamera Belakang</th>
                                <th>Jaringan</th>
                                <th>Baterai</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php 
                                function convertHargaToText($value) {
                                    switch ($value) {
                                        case 5:
                                            return "< Rp 1.999.000";
                                        case 4:
                                            return "Rp 2.000.000 – Rp 3.999.000";
                                        case 3:
                                            return "Rp 4.000.000 – Rp 5.999.000";
                                        case 2:
                                            return "Rp 6.000.000 – Rp 7.999.000";
                                        case 1:
                                            return "> Rp 8.000.000";
                                        default:
                                            return "Tidak diketahui";
                                    }
                                }
                                function convertRAMToText($value) {
                                    switch ($value) {
                                        case 5:
                                            return "> 16 GB";
                                        case 4:
                                            return "12 GB";
                                        case 3:
                                            return "8 GB";
                                        case 2:
                                            return "6 GB";
                                        case 1:
                                            return "< 4 GB";
                                        default:
                                            return "Tidak diketahui";
                                    }
                                }
                                function convertROMToText($value) {
                                    switch ($value) {
                                        case 5:
                                            return "> 512 GB";
                                        case 4:
                                            return "256 GB";
                                        case 3:
                                            return "128 GB";
                                        case 2:
                                            return "64 GB";
                                        case 1:
                                            return "< 32 GB";
                                        default:
                                            return "Tidak diketahui";
                                    }
                                }
                                function convertKameraToText($value) {
                                    switch ($value) {
                                        case 5:
                                            return "> 64 MP";
                                        case 4:
                                            return "42 - 64 MP";
                                        case 3:
                                            return "24 - 32 MP";
                                        case 2:
                                            return "12 - 16 MP";
                                        case 1:
                                            return "2 - 8 MP";
                                        default:
                                            return "Tidak diketahui";
                                    }
                                }
                                function convertJaringanToText($value) {
                                    switch ($value) {
                                        case 2:
                                            return "5G";
                                        case 1:
                                            return "4G";
                                        default:
                                            return "Tidak diketahui";
                                    }
                                }
                                function convertBateraiToText($value) {
                                    switch ($value) {
                                        case 3:
                                            return "6000 mAh";
                                        case 2:
                                            return "5500 mAh";
                                        case 1:
                                            return "5000 mAh";
                                        default:
                                            return "Tidak diketahui";
                                    }
                                }
                $no = 1;
                $get_data = mysqli_query($conn, "select * from handphone");
                while($display = mysqli_fetch_array($get_data)) {
                    $id = $display['id_handphone'];
                    $nama = $display['nama_handphone'];
                    $c1 = convertHargaToText($display['c1']);
                    $c2 = convertRAMToText($display['c2']);
                    $c3 = convertROMToText($display['c3']);
                    $c4 = convertKameraToText($display['c4']);
                    $c5 = convertKameraToText($display['c5']);
                    $c6 = convertJaringanToText($display['c6']);
                    $c7 = convertBateraiToText($display['c7']);
                ?>
                                <td class="text-truncate"><?php echo $no ?></td>
                                <td class="text-truncate"><?php echo $nama ?></td>
                                <td class="text-truncate"><?php echo $c1 ?></td>
                                <td class="text-truncate"><?php echo $c2 ?></td>
                                <td class="text-truncate"><?php echo $c3 ?></td>
                                <td class="text-truncate"><?php echo $c4 ?></td>
                                <td class="text-truncate"><?php echo $c5 ?></td>
                                <td class="text-truncate"><?php echo $c6 ?></td>
                                <td class="text-truncate"><?php echo $c7 ?></td>
                                <td class="text-truncate">
                                    <a href='ubah_handphone.php?id=<?php echo $id ?>'
                                        style="text-decoration: none; list-style: none;"><input type='submit'
                                            value='Ubah' id='editbtn' class="btn btn-primary btn-user"></a>
                                    <!-- Mengganti tombol Hapus dengan JavaScript untuk konfirmasi -->
                                    <a href="#" style="text-decoration: none; list-style: none;"
                                        onclick="confirmDelete(<?php echo $id; ?>)">
                                        <input type='submit' value='Hapus' id='delbtn' class="btn btn-danger btn-user">
                                    </a>
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
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.1/js/responsive.dataTables.min.js"></script>
    <script src="../assets/js/ResizeSensor.js"></script>
    <script src="../assets/js/dashboard.js"></script>
    <script>
    function confirmDelete(id) {
        // Tampilkan alert konfirmasi
        if (confirm("Apakah Anda yakin ingin menghapus handphone ini?")) {
            // Jika pengguna mengklik "OK", arahkan ke URL untuk menghapus data
            window.location.href = "delete_handphone.php?Del=" + id;
        }
    }
    </script>
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