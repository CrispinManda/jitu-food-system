<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- favicon -->
  <link rel="shortcut icon" href="./assets/images/favicon.ico" type="image/x-icon" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
  <link rel="stylesheet" href="./style.css">
  <title>Recipe System</title>
</head>
<body>
<!-- nav  -->
<nav class="navbar">
    <div class="nav-center">
      <div class="nav-header">
        <a href="index.php" class="nav-logo">
          <img src="./assets/images/images.png" alt="image" />
        </a>
      </div>
      <div class="nav-links">
        <div class="search-container">
        <form class="search-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
          <input type="search" name="search" placeholder="Search" class="search-input" id="search-input">
          <button type="submit" class="search-btn" id="search-btn" name="submit">Search</button>
        </form>
        </div>
      </div>
    </div>
  </nav>
  <!-- end of nav -->