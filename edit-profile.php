<?php
include "konek.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // Sanitize the ID
    $id = intval($id);
    
    // Prepare the SQL statement
    $sql = "SELECT * FROM login WHERE id = $id";
    $result = mysqli_query($con, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        $Username = htmlspecialchars($row['Username']);
        $Email = htmlspecialchars($row['Email']);
        $Age = htmlspecialchars($row['Age']);
        $Password = htmlspecialchars($row['Password']);
    } else {
        echo "No record found with ID: $id";
        exit();
    }
}

if (isset($_POST["submit"])) {
    $id = intval($_POST['id']);  
    $Username = mysqli_real_escape_string($con, $_POST['Username']);
    $Email = mysqli_real_escape_string($con, $_POST['Email']);
    $Age = mysqli_real_escape_string($con, $_POST['Age']);
    $Password = mysqli_real_escape_string($con, $_POST['Password']);

    // Prepare the update SQL statement
    $sql ="UPDATE login SET Username='$Username', Email='$Email', Age='$Age', Password='$Password' WHERE id=$id";

    $result = mysqli_query($con, $sql);

    if ($result) {
        header("Location: profile.php?msg=Record updated successfully");
        exit();
    } else {
        echo "Failed: " . mysqli_error($con);
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
    <link rel="stylesheet" href="order.css">
    <title>EDIT</title>
    <style>
        body {
            background-image: url('General_impact_-_Globe.svg');
            background-size: cover;
            background-position: center;
            margin-bottom: 95vh;
        }

        .form-container {
            background-color: #fff; 
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="form-container">
            <h3 class="text-center mb-4">EDIT PROFILE</h3>
            <form action="" method="post" style="min-width:300px;">
                <input type="hidden" name="id" value="<?php echo $id; ?>"> <!-- Hidden input to pass the id -->
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">Username :</label>
                        <input type="text" class="form-control" name="username" value="<?php echo $Username;?>" required>
                    </div>
                    <div class="col">
                        <label class="form-label">Email :</label>
                        <input type="text" class="form-control" name="email" value="<?php echo $Email;?>" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Age :</label>
                    <input type="text" class="form-control" name="age" value="<?php echo $Age;?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Password :</label>
                    <input type="text" class="form-control" name="password" value="<?php echo $Password;?>" required>
                </div>
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn" name="submit" style="background-color:#7852A9; color:white;">Edit</button>
                    <a href="profile.php" class="btn" style="background-color:#7852A9; color:white;">Cancel</a>
                </div>
            </form>
        </div>
    </div>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
