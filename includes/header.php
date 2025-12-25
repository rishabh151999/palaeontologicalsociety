<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Palaeontological Society of India</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
  <div class="container">
    
    <!-- Logo -->
    <a class="navbar-brand fw-bold" href="index.php">
      MyProject
    </a>

    <!-- Toggle Button (Mobile) -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
      data-bs-target="#mainNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Menu -->
    <div class="collapse navbar-collapse" id="mainNavbar">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

        <li class="nav-item">
          <a class="nav-link" href="index.php?page=home">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="index.php?page=about">About</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="index.php?page=services">Services</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="index.php?page=contact">Contact</a>
        </li>

        <!-- Auth Buttons -->
        <li class="nav-item ms-lg-3">
          <a class="btn btn-outline-light btn-sm" href="index.php?page=login">
            Login
          </a>
        </li>

      </ul>
    </div>
  </div>
</nav>
