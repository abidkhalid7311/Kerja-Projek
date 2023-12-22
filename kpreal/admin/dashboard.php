<?php include '../config.php' ?>
<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/dashboard.css">
</head>

<body>

    <?php include 'nav.php' ?>

    <main>
        <section class="comments">
            <h2>Comments</h2>
            <table>
                <thead>
                    <?php // Query SQL untuk mengambil data feedback
                    $sql = "SELECT * FROM feedback";
                    $result = $conn->query($sql);

                    // Tampilkan data dalam tabel
                    if ($result->num_rows > 0) {
                        echo "<table class='comments'>";
                        echo "<tr><th>ID</th><th>Date</th><th>Nama</th><th>Email</th><th>Comment</th><th>Action</th></tr>";

                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row["id"] . "</td>";
                            echo "<td>" . $row["tanggal"] . "</td>";
                            echo "<td>" . $row["nama"] . "</td>";
                            echo "<td>" . $row["email"] . "</td>";
                            echo "<td>" . $row["comment"] . "</td>";
                            echo "<td>";
                            echo "<a href='hapus.php?id=".$row['id']."' class='btn btn-danger'>Hapus</a>";
                            echo "</td>";
                            echo "</tr>";
                        }

                        echo "</table>";
                    } else {
                        echo "No feedback available.";
                    }

                    // Tutup koneksi
                    $db->close();
                ?>
                </thead>
            </table>
        </section>
    </main>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>