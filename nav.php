<?php include "config.php"  ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Hotel Royal</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Inter:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  </head>
  <body>
   <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark mb-5" style="z-index: 1000;">
     <div class="container">
        <!-- Logo -->
        <a class="navbar-brand" href="home.php" style="font-family: 'Playfair Display', serif; font-size: 1.8rem;">
            Hotel Royal
        </a>
        
        <!-- Mobile Menu Toggle -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navigation Items -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">


                <?php if(isset($_SESSION['admin'])) {
                    echo
                '<a href="home.php?logout" class=" ml-3 d-lg-block mr-3"> 
                <img src="out.png" alt="" width="38">
              </a>';
                } ?>
             
               
             
             

 <?php if(empty($_SESSION['admin']) AND empty($_SESSION['names'])) { ?>

                <li class="nav-item">
                    <a class="nav-link" href="login.php"><i class="fa-solid fa-user-tie"></i></a>
                </li>
                <?php } ?>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="room.php">Rooms & Suites</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="booking.php">Booking</a>
                </li>
                <?php if(isset($_SESSION['admin'])) { ?>
                <li class="nav-item">
                    <a class="nav-link" href="showingAppointment.php">Appointments</a>
                </li>
                <?php } ?>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
  </body>
</html>