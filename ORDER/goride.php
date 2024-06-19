<?php
 include 'konek.php';

$query = "SELECT * FROM goride;";
// $mysql = mysqli_query( $conn, $query );
$no = 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> 
    <link rel="stylesheet" href="setail.css">
</head>
<body>

    <!-- nav bar -->
    <!-- <nav>
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">
                CRUD - AMALIA
              </a>
            </div>
          </nav>
    </nav> -->

    <!-- judul -->
    <div class="container">
        <figure>
            <blockquote class="blockquote">
              <p>Ini adalah project CRUD saya dibuat dengan php</p>
            </blockquote>
            <figcaption class="blockquote-footer">
              CRUD<cite title="Source Title">. Create Read Update Delete</cite>
            </figcaption>
          </figure>
          <a href="goride2.php" type="button" class="btn btn-primary mb-5">Tambah Data</a>
          <table class="table">
            <thead class="table-info">
              <th>NO</th>
              <th>Nama</th>
              <th>Lokasi Saat Ini</th>
              <th>Tujuan</th>
              <th>Aksi</th>
            </thead>
            <tbody>
              <!-- <?php
              while ( $result = mysqli_fetch_assoc( $mysql ) ) {
              ?> -->
              <tr>
              <td>
                <?php echo ++ $no ?>
              </td>
              <td>
                <?php echo $result['nama']; ?>
              </td>
              <td>
                <?php echo $result['lokasi']; ?>
              </td>
              <td>
                <?php echo $result['tujuan']; ?>
              </td>
              <td>
                <a href="goride2.php?ubah=<?php echo $result['id']; ?>" type="button" class="btn btn-info"><i class='bx bx-message-square-edit'></i></a>
                
                <a href="proses.php?hapus=<?php echo $result['id']; ?>" type="button" class="btn btn-info" onClick="return confirm('Yng beneeeer mau di apus~')"><i class='bx bx-trash' ></i></a>
              </td>
            </tr>
              <?php
              }
              ?>
            </tbody>
          </table>
          
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>