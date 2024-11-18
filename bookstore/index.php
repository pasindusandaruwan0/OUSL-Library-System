<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Online Book Store</title>
  <!-- Bootstrap CSS -->
  <link href="bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">

</head>
<body>

  <!-- Navigation Bar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <div><a href="#"><img src="images/logo.png" width="50%"></a>
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
            <a class="nav-link" href="login.php">Shop</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Categories</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="hero bg-primary text-white text-center py-5 im">
    <div class="container">
      <h1 >Welcome to OUSL Library</h1>
      <p>The Open University Of Sri Lanka</p>
      <a href="login.php" class="btn btn-light btn-lg">Login</a>
    </div>
  </section>

  <!-- Book Categories Section -->
  <!-- <section class="categories py-5">
    <div class="container">
      <h2 class="text-center mb-4">Browse by Category</h2>
      <div class="row">
        <div class="col-md-4">
          <div class="category-card">
            <img src="https://via.placeholder.com/300x200" class="img-fluid" alt="Fiction">
            <h4 class="mt-2">Fiction</h4>
          </div>
        </div>
        <div class="col-md-4">
          <div class="category-card">
            <img src="https://via.placeholder.com/300x200" class="img-fluid" alt="Non-fiction">
            <h4 class="mt-2">Non-fiction</h4>
          </div>
        </div>
        <div class="col-md-4">
          <div class="category-card">
            <img src="https://via.placeholder.com/300x200" class="img-fluid" alt="Children's Books">
            <h4 class="mt-2">Children's Books</h4>
          </div>
        </div>
      </div>
    </div>
  </section> -->

  <!-- Popular Books Section -->
  <section class="popular-books bg-light py-5">
    <div class="container">
      <h2 class="text-center mb-4">Popular Books</h2>
      <div class="row">
        <div class="col-md-3">
          <div class="card">
            <img src="images/drama.jpg" class="card-img-top" alt="Book 1">
            <div class="card-body">
              <h5 class="card-title">Drama</h5>
              <!-- <p class="card-text">$19.99</p> -->
              <a href="login.php" class="btn btn-primary">Add to Cart</a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card">
            <img src="images/research.png" class="card-img-top" alt="Book 2">
            <div class="card-body">
              <h5 class="card-title">Research(2023)</h5>
              
              <a href="#" class="btn btn-primary">Add to Cart</a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card">
            <img src="images/Student Handbook.jpg" class="card-img-top" alt="Book 3">
            <div class="card-body">
              <h5 class="card-title">Student Handbook</h5>
              <!-- <p class="card-text">$25.99</p> -->
              <a href="login.php" class="btn btn-primary">Add to Cart</a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card">
            <img src="images/journal.jpg" class="card-img-top" alt="Book 4">
            <div class="card-body">
              <h5 class="card-title">OUSL Journal</h5>
              <!-- <p class="card-text">$17.99</p> -->
              <a href="login.php" class="btn btn-primary">Add to Cart</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-dark text-white py-4">
    <div class="container text-center">
      <p>&copy; 2024 Library. All rights reserved.</p>
    </div>
  </footer>

  <!-- Bootstrap JS, jQuery, and Popper.js -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
