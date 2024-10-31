<?php
include '../config/database.php';

// Get the ID of the criteria from the URL
if (isset($_GET['GetID'])) {
    $id = $_GET['GetID'];

    // Fetch the existing data for the selected criteria
    $query = "SELECT * FROM kriteria WHERE id_kriteria = '$id'";
    $result = mysqli_query($conn, $query);
    $data = mysqli_fetch_assoc($result);

    if (!$data) {
        echo "No record found.";
        exit;
    }

    $namaKriteria = $data['nama_kriteria'];
    $bobotKriteria = $data['bobot_kriteria'];
} else {
    echo "ID not specified.";
    exit;
}

// Update the criteria data if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $namaKriteria = $_POST['nama_kriteria'];
    $bobotKriteria = $_POST['bobot_kriteria'];

    // Update the criteria in the database
    $updateQuery = "UPDATE kriteria SET nama_kriteria = '$namaKriteria', bobot_kriteria = '$bobotKriteria' WHERE id_kriteria = '$id'";
    
    if (mysqli_query($conn, $updateQuery)) {
        header("Location: kriteria.php"); // Redirect back to the main criteria page after successful update
        exit;
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Edit Kriteria</title>

    <!-- vendor css -->
    <link href="../assets/lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="../assets/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="../assets/lib/select2/css/select2.min.css" rel="stylesheet">
    <link href="../assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="../assets/css/bracket.css">
</head>

<body>

    <?php include 'partials/sidebar.php'; ?>
    <?php include 'partials/header.php'; ?>

    <div class="br-mainpanel">
        <div class="br-pagetitle">
            <div>
                <h4>Edit Kriteria</h4>
            </div>
        </div>
        <div class="br-pagebody">
            <div class="br-section-wrapper">
                <form method="post">
                    <div class="form-group">
                        <label for="nama_kriteria">Nama Kriteria</label>
                        <input type="text" class="form-control" id="nama_kriteria" name="nama_kriteria"
                            value="<?php echo htmlspecialchars($namaKriteria); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="bobot_kriteria">Bobot Kriteria</label>
                        <input type="number" class="form-control" id="bobot_kriteria" name="bobot_kriteria"
                            value="<?php echo htmlspecialchars($bobotKriteria); ?>" step="0.01" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="index.php" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div><!-- br-pagebody -->
        <?php include 'partials/footer.php'; ?>
    </div><!-- br-mainpanel -->

    <script src="../assets/lib/jquery/jquery.min.js"></script>
    <script src="../assets/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>