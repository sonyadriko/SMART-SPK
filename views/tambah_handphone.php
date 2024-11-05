<?php
include '../config/database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama_handphone = $_POST['nama_handphone'];
    // $c1 = $_POST['c1'];
    $harga = $_POST['c1'];
    $c2 = $_POST['c2'];
    $c3 = $_POST['c3'];
    $c4 = $_POST['c4'];
    $c5 = $_POST['c5'];
    $c6 = $_POST['c6'];
    $c7 = $_POST['c7'];

      // Klasifikasikan harga ke dalam kategori
    if ($harga < 2000000) {
        $c1 = 5;
    } elseif ($harga >= 2000000 && $harga <= 3999000) {
        $c1 = 4;
    } elseif ($harga >= 4000000 && $harga <= 5999000) {
        $c1 = 3;
    } elseif ($harga >= 6000000 && $harga <= 7999000) {
        $c1 = 2;
    } else {
        $c1 = 1;
    }

    $query = "INSERT INTO handphone (nama_handphone, c1, c2, c3, c4, c5, c6, c7) VALUES ('$nama_handphone', '$c1', '$c2', '$c3', '$c4', '$c5', '$c6', '$c7')";
    
    if (mysqli_query($conn, $query)) {
        echo "New handphone added successfully";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
    header("Location: handphone.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Tambah Handphone</title>
    <link href="../assets/lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="../assets/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="../assets/css/bracket.css" rel="stylesheet">
</head>

<body>

    <?php include 'partials/sidebar.php' ?>
    <?php include 'partials/header.php' ?>

    <div class="br-mainpanel">
        <div class="br-pagetitle">
            <div>
                <h4>Tambah Handphone</h4>
            </div>
        </div>

        <div class="br-pagebody">
            <div class="br-section-wrapper">
                <form action="tambah_handphone.php" method="POST">
                    <div class="form-group">
                        <label for="nama_handphone">Nama Handphone</label>
                        <input type="text" class="form-control" id="nama_handphone" name="nama_handphone"
                            placeholder="Masukkan nama handphone" required>
                    </div>
                    <!-- <div class="form-group">
                        <label for="c1">Harga</label>
                        <select class="form-control" id="c1" name="c1" required>
                            <option value="" disabled selected>Select an option</option>
                            <option value="5">
                                < Rp 1.999.000</option>
                            <option value="4">Rp 2.000.000 – Rp 3.999.000</option>
                            <option value="3">Rp 4.000.000 – Rp 5.999.000</option>
                            <option value="2">Rp 6.000.000 – Rp 7.999.000</option>
                            <option value="1">> Rp 8.000.000</option>
                        </select>
                    </div> -->
                    <div class="form-group">
                        <label for="c1">Harga</label>
                        <input type="number" class="form-control" id="c1" name="c1" placeholder="Masukkan harga"
                            required>
                    </div>

                    <div class="form-group">
                        <label for="c2">RAM</label>
                        <select class="form-control" id="c2" name="c2" required>
                            <option value="" disabled selected>Select an option</option>
                            <option value="5">> 16 GB</option>
                            <option value="4">12 GB</option>
                            <option value="3">8 GB</option>
                            <option value="2">6 GB</option>
                            <option value="1">
                                < 4 GB</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="c3">ROM</label>
                        <select class="form-control" id="c3" name="c3" required>
                            <option value="" disabled selected>Select an option</option>
                            <option value="5">> 512 GB</option>
                            <option value="4">256 GB</option>
                            <option value="3">128 GB</option>
                            <option value="2">64 GB</option>
                            <option value="1">
                                < 32 GB</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="c4">Kamera Depan</label>
                        <select class="form-control" id="c4" name="c4" required>
                            <option value="" disabled selected>Select an option</option>
                            <option value="5">> 64 MP</option>
                            <option value="4">42 MP - 64 MP</option>
                            <option value="3">24 MP - 32 MP</option>
                            <option value="2">12 MP - 16 MP</option>
                            <option value="1">2 MP - 8 MP</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="c5">Kamera Belakang</label>
                        <select class="form-control" id="c5" name="c5" required>
                            <option value="" disabled selected>Select an option</option>
                            <option value="5">> 64 MP</option>
                            <option value="4">42 MP - 64 MP</option>
                            <option value="3">24 MP - 32 MP</option>
                            <option value="2">12 MP - 16 MP</option>
                            <option value="1">2 MP - 8 MP</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="c6">Jaringan</label>
                        <select class="form-control" id="c6" name="c6" required>
                            <option value="" disabled selected>Select an option</option>
                            <option value="2">5G</option>
                            <option value="1">4G</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="c7">Kapasitas Baterai</label>
                        <select class="form-control" id="c7" name="c7" required>
                            <option value="" disabled selected>Select an option</option>
                            <option value="1">5000 mAh</option>
                            <option value="2">5500 mAh</option>
                            <option value="3">6000 mAh</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>
    </div>

    <script src="../assets/lib/jquery/jquery.min.js"></script>
    <script src="../assets/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>