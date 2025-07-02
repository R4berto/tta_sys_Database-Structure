<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:index.php');
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>TTA HOMEPAGE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pagestyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  </head>
  <body>
    <div class="MENU">
      <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
          <i class="fas fa-bars"></i>
        </label>
        <label class="logo">The Thrift Avenue</label>
        <ul>
          <li><a class="active" href=#>Home</a></li>
          <li><a href="tta_act_admin_ar.php">Accounting</a></li>
          <li><a href=tta_hrd_admin_index1.php>Human Resources</a></li>
          <li><a href="tta_mkt_admin_cstmr.html">Marketing</a></li>
          <li><a href=http://localhost/tta/payrolls_admin>PayRoll</a></li>
          <li><a href=http://localhost/tta/Inventory_Admin/home.php>Inventory</a></li>
          <li><a href=http://localhost/tta/AboutUs_Admin/tta_sys_admin_index.php>AboutUs</a></li>
          <li><a href="logout.php">logout</a></li>
        </ul>
      </nav>
      <div class="content">
        <h4>Hello Admin,</h4>
        <h1><?php echo $_SESSION['admin_name'] ?></h1>
        <h3>"This is the admin page for
          <br> you to update and change the 
          <br> data needed" </h3>
      </div>
    </div>

    <script>
      document.addEventListener('DOMContentLoaded', function() {
        // Get menu elements
        const menuToggle = document.getElementById('check');
        const menuItems = document.querySelectorAll('.MENU ul li a');

        // Keep track of the active menu item
        let activeMenuItem = document.querySelector('.MENU ul li a.active');

        // Toggle active class on menu click
        menuItems.forEach(function(item) {
          item.addEventListener('click', function() {
            // Remove active class from the previously active menu item
            activeMenuItem.classList.remove('active');

            // Set the current menu item as the active one
            activeMenuItem = this;

            // Add active class to the clicked menu item
            activeMenuItem.classList.add('active');
          });
        });
      });
    </script>
  </body>
</html>
