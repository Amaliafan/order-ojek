<?php
include "koneksi.php";
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
  <link rel="stylesheet" href="order.css">
  <title>PHP CRUD Application</title>
  
  <style>
    body {
            background-image: url('General_impact_-_Globe.svg');
            background-size: cover;
            background-position: center;
            margin-bottom: 95vh;
        }
    .table-container {
      background-color: #ffffff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .btn-custom {
      background-color: #343a40;
      color: #ffffff;
    }
    .btn-custom:hover {
      background-color: #495057;
    }
    .table thead {
      background-color: #343a40;
      color: #ffffff;
    }
    .table tbody tr:hover {
      background-color: #f1f1f1;
    }
    .alert-custom {
      background-color: #ffc107;
      color: #000000;
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
  <div class="container mt-5">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-custom fade show" role="alert">
      ' . $msg . '
    </div>';
    }
    ?>
    <!-- <a href="tambah.php" class="btn btn-custom mb-3">Add New</a> -->

    <div class="table-container">
      <table class="table table-hover text-center">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Lokasi Penjemputan</th>
            <th scope="col">Alamat Tujuan</th>
            <th scope="col">Pembayaran</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $sql = "SELECT * FROM `goride`";
          $result = mysqli_query($conn, $sql);
          $counter = 1; // Inisialisasi counter
          while ($row = mysqli_fetch_assoc($result)) {
          ?>
            <tr>
              <td><?php echo $counter; ?></td>
              <td><?php echo $row["nama"] ?></td>
              <td><?php echo $row["lokasi"] ?></td>
              <td><?php echo $row["tujuan"] ?></td>
              <td><?php echo $row["pembayaran"] ?></td>
              <td>
                <a href="tambah.php?id=<?php echo $row["id"] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                <a href="delete.php?id=<?php echo $row["id"] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
              </td>
            </tr>
          <?php
            $counter++; // Increment counter setiap kali loop menghasilkan baris baru
          }
          ?>
        </tbody>
      </table>
      <a href="admin.php" class="btn" style=" background-color: #7852A9; color: white; padding: 6px 20px;  text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin-top: 10px; margin-left: 15px; cursor: pointer; border-radius: 25px; position:center;">Back</a>
    </div>
  </div>

  <footer>
    <p>&copy; 2024 Tabel. Amalia Melfana.</p>
  </footer>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

  <script>
    // Menghilangkan alert setelah 3 detik
    window.setTimeout(function() {
        let alert = document.querySelector('.alert');
        if (alert) {
            alert.classList.remove('show');
            alert.classList.add('fade');
            window.setTimeout(() => alert.remove(), 150);
        }
    }, 3000);
  </script>

</body>
</html>
