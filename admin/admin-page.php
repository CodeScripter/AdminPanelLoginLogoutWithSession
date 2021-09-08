<?php
 include 'header.php';
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/adminpage.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu'></i>
        <a style="text-decoration: none;" href="#">
        <span>Home</span>
        </a>
      </div>
        <div class="sidebar-button">
          <a style="text-decoration:none;" href="#">
            <i class='bx bx-list-ul'></i>
            <span>Categories</span>
          </a>
        </div>
        <div class="sidebar-button">
          <a style="text-decoration:none;" href="#">
            <i class='bx bx-box'></i>
            <span>Product</span>
          </a>
        </div>
        <div class="sidebar-button">
          <a style="text-decoration:none;" href="#">
            <i class='bx bx-message' ></i>
            <span>CMS</span>
          </a>
        </div>

      <div class="profile-details">
        <span class="admin_name">Pradeep Beniwal</span>
        <i class='bx bx-chevron-down'></i>
      </div>

      <div>
        <?php
        if($_SESSION["user_name"]) {
        ?>
        Welcome <?php echo $_SESSION["user_name"]; ?>. Click here to <a href="index.php?logout=1" tite="Logout">Logout.
        <?php
        }else echo "<h1>Please login first .</h1>";
        ?>
      </div>
    </nav>
  </section>

</body>
</html>


