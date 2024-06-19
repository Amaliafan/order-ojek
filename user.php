<?php 
   session_start();
   include("konek.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="setel.css">
    <link rel="stylesheet" href="admin.css">
    <script src="java.js" defer></script>
    <title>USER</title>
    <link flex href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <script>
      window.onload = function() {
        showNotification("Selamat Datang User");
      };

      function showSection(sectionId) {
        document.querySelectorAll('.content-section').forEach(section => {
          section.style.display = 'none';
        });
        document.getElementById(sectionId).style.display = 'block';
      }

      function showNotification(message) {
        const notification = document.getElementById('notification');
        const notificationMessage = document.getElementById('notification-message');
        
        notificationMessage.textContent = message;
        notification.style.display = 'block';

        setTimeout(() => {
          notification.style.display = 'none';
        }, 3000);
      }
    </script>
    <style>
      .sidebar {
        background-color: #CDF0EA;
        color: white;
        height: 100vh;
        position: fixed;
        width: 250px;
      }
      .menu_item a {
        color: black;
        text-decoration: none;
      }
      .menu_item a:hover {
        background-color: black;
      }
      .notification {
        position: fixed;
        top: 20px;
        left: 50%;
        transform: translateX(-50%);
        background-color: #AD88C6;
        color: white;
        padding: 15px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        z-index: 1000;
      }
      .card-body{
        margin-right: 200px;
      } 
    </style>
</head>
<body>
<div id="notification" class="notification" style="display: none;">
  <p id="notification-message"></p>
</div>

<div class="nav">
<div class="container border mb-10 rounded-3 bg-white position-relative top-5 start-50">
<div class="container">
  <div class="sidebar">
    <nav class="sidebar locked">
       <div class="gojek-logo">
        <img src="jok.png" class="image-gojek" style="margin-left:5vh;"/>
      </div> 
      <div class="menu_container">
        <div class="menu_items">
          <br>
          <ul class="menu_item">
            <li class="item">
              <a href="#" class="link flex" onclick="showSection('home-section')">
                <i class="bx bx-home"></i>
                <span>Home</span>
              </a>
            </li>
            <li class="item">
              <a href="order1.php" class="link flex" onclick="showSection('user-section')">
                <i class="bx bx-car"></i>
                <span>Goride</span>
              </a>
            </li>
            <li class="item">
              <a href="order.php" class="link flex" onclick="showSection('masuk-section')">
                <i class="bx bx-calendar-edit"></i>
                <span>Pesanan</span>
              </a>
            </li>
            <li class="item">
              <a href="#" class="link flex" onclick="showSection('profile-section')">
                <i class="bx bx-user-circle"></i>
                <span>Profil</span>
              </a>
            </li>
          </ul>
        </div>
        <br>
        <br>
        <br>
        <br>
        <a href="logout.php"> <button class="btn" style="margin-left:3vh;">Log Out</button> </a>
      </div>
    </nav>
  </div>
  <div class="content">
    <div id="home-section" class="content-section active">
      <div class="row">
  <div class="col-sm-6 mb-3 mb-sm-0">
    <div class="card">
      <div class="card-body">
      <img src="General_impact_-_Globe.svg" style="width: 150%;">
      </div>
    </div>
  </div>
  </div>
</div>
    </div>
    <div id="user-section" class="content-section" style="Font-size:30px; margin-left:120px;">
      <img src="General_impact_-_Globe.svg" style="width: 150%;">
      </div>
    </div>
    <div id="masuk-section" class="content-section" style="Font-size:30px; margin-left:120px;">
      <img src="General_impact_-_Globe.svg" style="width: 150%;">
      </div>
    </div>
    <div id="profile-section" class="content-section" style="Font-size:30px; margin-left:120px;">
      <img src="General_impact_-_Globe.svg" style="width: 150%;">
      </div>
  </div>
</div>
</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script>
    // Initialize the default section
    document.addEventListener('DOMContentLoaded', function() {
      showSection('home-section');
    });
  </script>
</body>
</html>
