<?php
include "konek.php";
$id = $_GET["id"];
$sql = "DELETE FROM `login` WHERE id = $id";
$result = mysqli_query($con, $sql);

if ($result) {
  header("Location: profile.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($con);
}