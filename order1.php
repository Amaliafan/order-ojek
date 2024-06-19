<?php
    include "koneksi.php";

    if (isset($_POST["submit"])) {
        $nama = $_POST['nama'];
        $lokasi = $_POST['lokasi'];
        $tujuan = $_POST['tujuan'];
        $pembayaran = $_POST['pembayaran'];

    $sql = "INSERT INTO `goride`(`id`, `nama`, `lokasi`, `tujuan`, `pembayaran`) VALUES (NULL,'$nama','$lokasi','$tujuan','$pembayaran')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: order.php?msg=New record created successfully");
    } else {
        echo "Failed: " . mysqli_error($conn);
    }
    }
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="setel.css">
    <link rel="stylesheet" href="order.css">
    <title>PHP CRUD Application</title>
    <style>
        body {
            background-image: url('General_impact_-_Globe.svg');
            background-size: cover;
            background-position: center;
            margin-bottom: 95vh;
        }

        .form-container {
            background-color: #fff; /* warna background */
            padding: 45px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            margin-bottom: 20vh;
        }
        .gojek-logo{
        width: 17vh;
        height: 10vh;
        margin-left: 12vh;
        margin-top: 1.5vh;
    }

        footer {
            background-color: #ffff;
            color: black;
            text-align: center;
            padding: 1px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body>
<img src="Gojek-Logo-Horizontal.jpg" class="gojek-logo"/>
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="form-container">
            <h3 class="text-center mb-4"><b>Order</b></h3>
            <form action="" method="post" style="min-width:300px;">
                <div class="mb-3">
                    <label class="form-label">Nama Anda:</label>
                    <input type="text" class="form-control" name="nama" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Lokasi Sekarang:</label>
                    <input type="text" class="form-control" name="lokasi" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Alamat Tujuan:</label>
                    <input type="text" class="form-control" name="tujuan" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Metode Pembayaran :</label>
                    <input type="text" class="form-control" name="pembayaran" required>
                </div>
                <div class="d-flex justify-content-between" style="margin-top: 2vh;">
                    <button type="submit" class="btn" name="submit" style="background-color: #7852A9; color: white; padding: 6px 20px;  text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin-top: 10px; margin-right: 20px; cursor: pointer; border-radius: 25px;">Pesan</button>
                    <a href="user.php" class="btn" style="background-color: #7852A9; color: white; padding: 6px 20px;  text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin-top: 10px; margin-left: 20vh; cursor: pointer; border-radius: 25px;">Cancel</a>
                </div>
            </form>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Order. Amalia Melfana.</p>
    </footer>

    <?php
    // Periksa apakah parameter msg ada di URL
    if(isset($_GET['msg'])) {
        // Jika ada, tampilkan pesan notifikasi
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                ' . $_GET['msg'] . '
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
    }
    ?>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>
