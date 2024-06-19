<?php
include 'konek.php';

$id = '';
$nama = '';
$lokasi = '';
$tujuan = '';

  if (isset($_GET['ubah'])) {
    $id = $_GET['ubah'];
    // echo $id_siswa;

    $query = "SELECT * FROM goride WHERE id = '$id';";
    $mysql = mysqli_query($conn, $query);

    $result = mysqli_fetch_assoc($mysql);
    $nama = $result['nama'];
    $lokasi = $result['lokasi'];
    $tujuan = $result['tujuan'];

    // var_dump($result);


    // die();
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> -->
    <!-- <link rel="stylesheet" href="setail.css"> -->
</head>
<body>
      <?php 
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="setel.css">
    <title>Goride</title>
</head>
<style>
        body {
            background-image: url('General_impact_-_Globe.svg');
            background-size: cover;
            background-position: center;
            margin-bottom: 95vh;
        }
         .image-gojek{
            width: 200vh;
            margin-top: 40px;
            height: 200vh;
        }
</style>
<body>
      <div class="container">
        <div class="box form-box">
            <?php 
             
              include("konek.php");
              if(isset($_POST['aksi'])){
                $nama = mysqli_real_escape_string($con,$_POST['nama']);
                $lokasi = mysqli_real_escape_string($con,$_POST['lokasi']);
                $tujuan = mysqli_real_escape_string($con,$_POST['tujuan']);

                $result = mysqli_query($con,"SELECT * FROM goride WHERE id='$id',nama='$nama',lokasi='$lokasi',tujuan='$tujuan'") or die("Select Error");
                $row = mysqli_fetch_assoc($result);

                if(is_array($row) && !empty($row)){
                    $_SESSION['valid'] = $row['id'];
                    $_SESSION['nama'] = $row['nama'];
                    $_SESSION['lokasi'] = $row['lokasi'];
                    $_SESSION['tujuan'] = $row['tujuan'];
                }else{
                    echo "<div class='message'>
                      <p>Wrong Username or Password</p>
                       </div> <br>";
                   echo "<a href='goride.php'><button class='btn'>Go Back</button>";
         
                }
                if(isset($_SESSION['valid'])){
                    header("Location:goride2.php");
                }
              }else{

            
            ?>
            <header>Goride</header>
            <form method="post" action="proses.php">
                <!-- <div class="field input">
                    <label for="id">Id</label>
                    <input type="int" name="id" id="id" autocomplete="off" required>
                </div> -->

                <div class="field input">
                    <label for="password">Nama</label>
                    <input type="text" name="name" id="id" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="password">Lokasi</label>
                    <input type="location" name="location" id="id" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="password">Tujuan</label>
                    <input type="location" name="location" id="id" autocomplete="off" required>
                </div>
                
        
                <div class="field">
                    <!-- <input type="submit" class="btn" name="submit" value="Pesan Goride" required> -->
                    <!-- <button type="sumbit" name="aksi" value="add" class="btn btn-primary mb-5">Pesan Goride</button> -->
                
                <!-- <a href="admin.php" type="button" style="text-decoration: none; color:#7852A9; margin-left:22.5vh;"><b>Back</b></a> -->
                <?php } ?>
                <?php
            if (isset($_GET['ubah'])) {
            ?>

            <button type="sumbit" name="aksi" value="edit" class="btn btn-primary mb-5">Edit</button>

            <?php
            } else {
            ?>

             <button type="sumbit" name="aksi" value="add" class="btn btn-primary mb-5">Tambah</button>

             <?php
            }
            ?>
            </form>
            </div>
        </div>
      </div>
    </div>
</body>
</html>