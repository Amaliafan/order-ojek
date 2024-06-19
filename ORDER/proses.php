<?php
include 'konek.php';

$id = '';
$nama = '';
$lokasi = '';
$tujuan = '';

if (isset($_GET['ubah'])) {
    $id = $_GET['ubah'];

    $query = "SELECT * FROM goride WHERE id = '$id';";
    $mysql = mysqli_query($conn, $query);

    $result = mysqli_fetch_assoc($mysql);
    $nama = $result['nama'];
    $lokasi = $result['lokasi'];
    $tujuan = $result['tujuan'];
}

if (isset($_POST['aksi'])) {
    if ($_POST['aksi'] == "add") {
        $nama = $_POST['nama'];
        $lokasi = $_POST['lokasi'];
        $tujuan = $_POST['tujuan'];

        $query = "INSERT INTO goride VALUES(null, '$nama', '$lokasi', '$tujuan')";
        $mysql = mysqli_query($conn, $query);

        if ($mysql) {
            header("location:goride.php");
        } else {
            echo "DATA GAGAL!!!";
        }
    } else if ($_POST['aksi'] == "edit") {
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $lokasi = $_POST['lokasi'];
        $tujuan = $_POST['tujuan'];

        $query = "UPDATE goride SET nama = '$nama', lokasi = '$lokasi', tujuan = '$tujuan' WHERE id = '$id';";
        $mysql = mysqli_query($conn, $query);

        if ($mysql) {
            header("location:goride.php");
        } else {
            echo "DATA GAGAL DIUPDATE!!!";
        }
    }
}

if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    $query = "DELETE FROM goride WHERE id = '$id';";
    $mysql = mysqli_query($conn, $query);

    if ($mysql) {
        header("location:goride.php");
    } else {
        echo "DATA GAGAL DIHAPUS!!!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Goride</title>
    <link rel="stylesheet" href="setel.css">
</head>
<body>
    <div class="container">
        <div class="box form-box">
            <header>Goride</header>
            <form method="post" action="proses.php">
                <div class="field input">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama" autocomplete="off" value="<?php echo $nama; ?>" required>
                </div>
                <div class="field input">
                    <label for="lokasi">Lokasi</label>
                    <input type="text" name="lokasi" id="lokasi" autocomplete="off" value="<?php echo $lokasi; ?>" required>
                </div>
                <div class="field input">
                    <label for="tujuan">Tujuan</label>
                    <input type="text" name="tujuan" id="tujuan" autocomplete="off" value="<?php echo $tujuan; ?>" required>
                </div>
                <?php if (isset($_GET['ubah'])): ?>
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <button type="submit" name="aksi" value="edit" class="btn btn-primary mb-5">Edit</button>
                <?php else: ?>
                    <button type="submit" name="aksi" value="add" class="btn btn-primary mb-5">Tambah</button>
                <?php endif; ?>
            </form>
        </div>
    </div>
</body>
</html>