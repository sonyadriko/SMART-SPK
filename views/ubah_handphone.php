<?php
include '../config/database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $nama_handphone = $_POST['nama_handphone'];
    $c1 = $_POST['c1']; // Mengambil nilai harga langsung dari select
    $c2 = $_POST['c2'];
    $c3 = $_POST['c3'];
    $c4 = $_POST['c4'];
    $c5 = $_POST['c5'];
    $c6 = $_POST['c6'];
    $c7 = $_POST['c7'];

    // Klasifikasikan harga ke dalam kategori
    // if ($harga < 2000000) {
    //     $c1 = 5;
    // } elseif ($harga >= 2000000 && $harga <= 3999000) {
    //     $c1 = 4;
    // } elseif ($harga >= 4000000 && $harga <= 5999000) {
    //     $c1 = 3;
    // } elseif ($harga >= 6000000 && $harga <= 7999000) {
    //     $c1 = 2;
    // } else {
    //     $c1 = 1;
    // }

    $query = "UPDATE handphone SET 
                nama_handphone = '$nama_handphone',
                c1 = '$c1',
                c2 = '$c2',
                c3 = '$c3',
                c4 = '$c4',
                c5 = '$c5',
                c6 = '$c6',
                c7 = '$c7' 
              WHERE id_handphone = '$id'";

    if (mysqli_query($conn, $query)) {
        echo "Handphone updated successfully";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
    header("Location: handphone.php");
    exit();
}

// Ambil data handphone berdasarkan id
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM handphone WHERE id_handphone = '$id'";
    $result = mysqli_query($conn, $query);
    $handphone = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
} else {
    header("Location: handphone.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ubah Handphone</title>
    <link href="../assets/lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="../assets/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="../assets/css/bracket.css" rel="stylesheet">
</head>

<body>

    <?php include 'partials/sidebar.php'; ?>
    <?php include 'partials/header.php'; ?>

    <div class="br-mainpanel">
        <div class="br-pagetitle">
            <div>
                <h4>Ubah Handphone</h4>
            </div>
        </div>

        <div class="br-pagebody">
            <div class="br-section-wrapper">
                <form action="ubah_handphone.php" method="POST">
                    <input type="hidden" name="id"
                        value="<?php echo isset($handphone['id_handphone']) ? htmlspecialchars($handphone['id_handphone'], ENT_QUOTES, 'UTF-8') : ''; ?>">
                    <div class="form-group">
                        <label for="nama_handphone">Nama Handphone</label>
                        <input type="text" class="form-control" id="nama_handphone" name="nama_handphone"
                            value="<?php echo $handphone['nama_handphone']; ?>" required>
                    </div>
                    <!-- <div class="form-group">
                        <label for="c1">Harga</label>
                        <input type="number" class="form-control" id="c1" name="c1"
                            value="<?php echo $handphone['c1']; ?>" required>
                    </div> -->
                    <div class="form-group">
                        <label for="c1">Harga</label>
                        <select class="form-control" id="c1" name="c1" required>
                            <option value="" disabled selected>Select an option</option>
                            <option value="5" <?php if ($handphone['c1'] == 5) echo 'selected'; ?>>
                                < Rp 1.999.000</option>
                            <option value="4" <?php if ($handphone['c1'] == 4) echo 'selected'; ?>>Rp 2.000.000 – Rp
                                3.999.000</option>
                            <option value="3" <?php if ($handphone['c1'] == 3) echo 'selected'; ?>>Rp 4.000.000 – Rp
                                5.999.000</option>
                            <option value="2" <?php if ($handphone['c1'] == 2) echo 'selected'; ?>>Rp 6.000.000 – Rp
                                7.999.000</option>
                            <option value="1" <?php if ($handphone['c1'] == 1) echo 'selected'; ?>>> Rp 8.000.000
                            </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="c2">RAM</label>
                        <select class="form-control" id="c2" name="c2" required>
                            <option value="5" <?php if ($handphone['c2'] == 5) echo 'selected'; ?>> > 16 GB</option>
                            <option value="4" <?php if ($handphone['c2'] == 4) echo 'selected'; ?>>12 GB</option>
                            <option value="3" <?php if ($handphone['c2'] == 3) echo 'selected'; ?>>8 GB</option>
                            <option value="2" <?php if ($handphone['c2'] == 2) echo 'selected'; ?>>6 GB</option>
                            <option value="1" <?php if ($handphone['c2'] == 1) echo 'selected'; ?>>
                                < 4 GB</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="c3">ROM</label>
                        <select class="form-control" id="c3" name="c3" required>
                            <option value="5" <?php if ($handphone['c3'] == 5) echo 'selected'; ?>> > 512 GB</option>
                            <option value="4" <?php if ($handphone['c3'] == 4) echo 'selected'; ?>>256 GB</option>
                            <option value="3" <?php if ($handphone['c3'] == 3) echo 'selected'; ?>>128 GB</option>
                            <option value="2" <?php if ($handphone['c3'] == 2) echo 'selected'; ?>>64 GB</option>
                            <option value="1" <?php if ($handphone['c3'] == 1) echo 'selected'; ?>>
                                < 32 GB</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="c4">Kamera Depan</label>
                        <select class="form-control" id="c4" name="c4" required>
                            <option value="5" <?php if ($handphone['c4'] == 5) echo 'selected'; ?>> > 64 MP</option>
                            <option value="4" <?php if ($handphone['c4'] == 4) echo 'selected'; ?>>42 MP - 64 MP
                            </option>
                            <option value="3" <?php if ($handphone['c4'] == 3) echo 'selected'; ?>>24 MP - 32 MP
                            </option>
                            <option value="2" <?php if ($handphone['c4'] == 2) echo 'selected'; ?>>12 MP - 16 MP
                            </option>
                            <option value="1" <?php if ($handphone['c4'] == 1) echo 'selected'; ?>>2 MP - 8 MP</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="c5">Kamera Belakang</label>
                        <select class="form-control" id="c5" name="c5" required>
                            <option value="5" <?php if ($handphone['c5'] == 5) echo 'selected'; ?>> > 64 MP</option>
                            <option value="4" <?php if ($handphone['c5'] == 4) echo 'selected'; ?>>42 MP - 64 MP
                            </option>
                            <option value="3" <?php if ($handphone['c5'] == 3) echo 'selected'; ?>>24 MP - 32 MP
                            </option>
                            <option value="2" <?php if ($handphone['c5'] == 2) echo 'selected'; ?>>12 MP - 16 MP
                            </option>
                            <option value="1" <?php if ($handphone['c5'] == 1) echo 'selected'; ?>>2 MP - 8 MP</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="c6">Jaringan</label>
                        <select class="form-control" id="c6" name="c6" required>
                            <option value="2" <?php if ($handphone['c6'] == 2) echo 'selected'; ?>>5G</option>
                            <option value="1" <?php if ($handphone['c6'] == 1) echo 'selected'; ?>>4G</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="c7">Kapasitas Baterai</label>
                        <select class="form-control" id="c7" name="c7" required>
                            <option value="1" <?php if ($handphone['c7'] == 1) echo 'selected'; ?>>5000 mAh</option>
                            <option value="2" <?php if ($handphone['c7'] == 2) echo 'selected'; ?>>5500 mAh</option>
                            <option value="3" <?php if ($handphone['c7'] == 3) echo 'selected'; ?>>6000 mAh</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Ubah</button>
                </form>
            </div>
        </div>
    </div>

    <script src="../assets/lib/jquery/jquery.min.js"></script>
    <script src="../assets/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/bracket.js"></script>
</body>

</html>