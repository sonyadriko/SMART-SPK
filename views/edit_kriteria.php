<?php
include '../config/database.php';

// Get the ID of the criteria from the URL
if (isset($_GET['GetID'])) {
    $id = $_GET['GetID'];

    // Fetch the existing data for the selected criteria
    $query = "SELECT * FROM kriteria WHERE id_kriteria = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $data = $result->fetch_assoc();

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

    // Validate input
    if ($bobotKriteria < 1 || $bobotKriteria > 100) {
        echo "Bobot harus berada dalam rentang 1-100.";
    } else {
        // Update the criteria in the database
        $updateQuery = "UPDATE kriteria SET nama_kriteria = ?, bobot_kriteria = ? WHERE id_kriteria = ?";
        $stmt = $conn->prepare($updateQuery);
        $stmt->bind_param('sdi', $namaKriteria, $bobotKriteria, $id);

        if ($stmt->execute()) {
            header("Location: kriteria.php"); // Redirect back to the main criteria page after successful update
            exit;
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Edit Kriteria</title>
    <link href="../assets/lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="../assets/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="../assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/bracket.css">
</head>

<body>
    <?php include 'partials/sidebar.php'; ?>
    <?php include 'partials/header.php'; ?>

    <div class="br-mainpanel">
        <div class="br-pagetitle">
            <h4>Edit Kriteria</h4>
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
                            value="<?php echo htmlspecialchars($bobotKriteria); ?>" step="0.01" min="1" max="100" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="kriteria.php" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
        <?php include 'partials/footer.php'; ?>
    </div>

    <script src="../assets/lib/jquery/jquery.min.js"></script>
    <script src="../assets/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
