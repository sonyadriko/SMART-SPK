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
                <h4>Dashboard</h4>
            </div>
        </div>

        <div class="br-pagebody">


            <div class="row row-sm mg-t-20">
                <div class="col-lg-12">
                    <div class="card bd-0 shadow-base">
                        <div class="d-md-flex justify-content-between pd-25">
                            <div>
                                <h6 class="tx-13 tx-uppercase tx-inverse tx-semibold tx-spacing-1">Simple
                                    Multi-Attribute Rating Technique</h6>
                                <p>SMART (Simple Multi-Attribute Rating Technique) adalah salah satu metode dalam Sistem
                                    Pendukung Keputusan (SPK) yang berguna untuk menyelesaikan masalah yang melibatkan
                                    banyak kriteria atau atribut dalam proses pengambilan keputusan. Metode ini populer
                                    karena kesederhanaannya, fleksibilitasnya, dan kemampuannya dalam membantu memilih
                                    atau memberi peringkat terhadap beberapa alternatif berdasarkan bobot dari setiap
                                    kriteria yang relevan.</p>
                            </div>
                        </div><!-- d-flex -->
                    </div><!-- card -->
                </div><!-- col-8 -->

                <div class="col-lg-12 mt-4">
                    <div class="card bd-0 shadow-base">
                        <div class="d-md-flex justify-content-between pd-25">
                            <div>
                                <h6 class="tx-13 tx-uppercase tx-inverse tx-semibold tx-spacing-1">Langkah-Langkah SMART
                                </h6><br>
                                <p>
                                    <strong>1. Identifikasi Kriteria dan Alternatif</strong><br>
                                    Menentukan kriteria yang digunakan dalam pengambilan keputusan dan alternatif yang
                                    akan dievaluasi.
                                </p>
                                <p>
                                    <strong>2. Menentukan Bobot Kriteria</strong><br>
                                    Setiap kriteria diberikan bobot berdasarkan tingkat kepentingannya terhadap
                                    keputusan. Jumlah total bobot biasanya disamakan menjadi 1 atau 100%.
                                </p>
                                <p>
                                    <strong>3. Penilaian Skor Alternatif</strong><br>
                                    Setiap alternatif diberi nilai atau skor pada setiap kriteria, yang biasanya
                                    distandarisasi antara 0 hingga 1, tergantung pada kriteria yang digunakan.
                                </p>
                                <p>
                                    <strong>4. Menghitung Skor Akhir</strong><br>
                                    Skor akhir untuk setiap alternatif dihitung dengan menjumlahkan hasil perkalian skor
                                    pada setiap kriteria dengan bobotnya.
                                </p>
                                <p>
                                    <strong>5. Perangkingan Alternatif</strong><br>
                                    Alternatif diurutkan berdasarkan skor akhir yang diperoleh, dan alternatif dengan
                                    skor tertinggi menjadi alternatif terbaik.
                                </p>
                            </div>
                        </div><!-- d-md-flex -->
                    </div><!-- card -->
                </div><!-- col-lg-12 -->

            </div><!-- row -->

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

    <script src="../assets/js/ResizeSensor.js"></script>
    <script src="../assets/js/dashboard.js"></script>
</body>

</html>