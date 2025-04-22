<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .hero {
            background-color: #007bff;
            color: white;
            padding: 60px 0;
            text-align: center;
        }
        .card {
            border-radius: 15px;
        }
        </style>

  

</head>
<body>
<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
        <div class="home">
        <span><?php    
                      if (isset($_SESSION['username'])) {
                          echo $_SESSION['username'];
                      } 
                      else {
                          echo "Invalid User";
                      }
              ?>
      </span>
     
    </div>
            <!--<a class="navbar-brand" </a>-->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
      
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php" class="logout">Log out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero">
        <h1>Welcome to the Hospital Management System</h1>
        <p>Your one-stop solution for hospital administration and patient management.</p>
    </div>

    <!-- Features Section -->
    <div id="home" class="container my-5">
        <h2 class="text-center mb-4">Our Features</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="card shadow p-3">
                    <div class="card-body text-center">
                        <h5 class="card-title">Patient Registration</h5>
                        <p class="card-text">Easily register and manage patient records.</p>
                        <a href="register.php" class="btn btn-primary">Register</a>
                    </div>
                </div>
            </div>

          
            <div class="col-md-6">
                <div class="card shadow p-3">
                    <div class="card-body text-center">
                        <h5 class="card-title">View patients</h5>
                        <p class="card-text">Easily View and Edit patient records.</p>
                        <a href="viewpatient.php" class="btn btn-primary">View Patients</a>
                    </div>
                </div>
            </div>

</body>
</html>
