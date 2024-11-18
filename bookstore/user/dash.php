<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard - Library System</title>
    <!-- Bootstrap CSS -->
    <link href="../bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="dash.css">
   
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <div><a href="#"><img src="../images/logo.png" width="50%"></a>
            <!-- <a class="ousl" href="#"  alt="" >
             OUSL<br>
            <span>BOOK STORE</span></a> -->

        </div>
        
      <!-- <a class="navbar-brand" href="#">BookStore</a> -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Shop</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Categories</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

    <!-- User Dashboard Content -->
    <div class="container mt-5">
        <h2 class="text-center">LIbrary Sytem</h2>
        <form class="mb-4" action="user-dashboard.html" method="get">
            <input type="text" class="form-control" placeholder="Search books by title or author" name="search">
        </form>
        
        <div class="topic">
        <small class="text-muted h1">Categories</small>

        </div>
        <div class="row">
            <!-- Loop through books and display them (This will be dynamic in a real application) -->
            <div class="col-md-3 mb-3">
                <div class="card">
                    <img src="../images/ACLT.jpg" class="card-img-top" alt="Book 2">
                    <div class="card-body">
                        <h5 class="card-title">Faculty of Natural Sciences</h5>
                        <p></p>
                        <!-- <p class="card-text">Mathematical Methods in Engineering and Applied Sciences</p>
                        <p><strong>Available: 5</strong></p> -->
                        <a href="fns.php" class="btn btn-primary">See More</a>
                    </div>
                </div>
            </div>
        
            <div class="col-md-3 mb-3">
                <div class="card">
                    <img src="../images/Mech_2-1.jpg" class="card-img-top" alt="Book 2">
                    <div class="card-body">
                        <h5 class="card-title">Faculty of Engineering</h5>
                        <p></p>
                        <!-- <p class="card-text">Mathematical Methods in Engineering and Applied Sciences</p>
                        <p><strong>Available: 5</strong></p> -->
                        <a href="#" class="btn btn-primary">See More</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-3">
                <div class="card">
                    <img src="../images/education.jpg" class="card-img-top" alt="Book 2">
                    <div class="card-body">
                        <h5 class="card-title">Faculty of  Education </h5>
                        <p></p>
                        <!-- <p class="card-text">Mathematical Methods in Engineering and Applied Sciences</p>
                        <p><strong>Available: 5</strong></p> -->
                        <a href="#" class="btn btn-primary">See More</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3 mb-3">
                <div class="card">
                    <img src="../images/management.jpg" class="card-img-top" alt="Book 2">
                    <div class="card-body">
                        <h5 class="card-title">Managements Studies</h5>
                        <p></p>
                        <!-- <p class="card-text">Mathematical Methods in Engineering and Applied Sciences</p>
                        <p><strong>Available: 5</strong></p> -->
                        <a href="#" class="btn btn-primary">See More</a>
                    </div>
                </div>
            </div>

         
          

            <!-- More books... -->
        </div>
    </div>
      <!-- Footer -->
  <footer class="bg-dark text-white py-4">
    <div class="container text-center">
      <p>&copy; 2024 BookStore. All rights reserved.</p>
    </div>
  </footer>

    <!-- Bootstrap JS & Popper -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
