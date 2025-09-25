<?php
  $currentPage = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iris Pharma</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Iris Pharma</h1>
    <p>Natural Remedies for Better Living</p>
  </header>

  <nav>
    <a href="index.php" class="<?= ($currentPage == 'index.php') ? 'active' : '' ?>">Home</a>
    <a href="products.php" class="<?= ($currentPage == 'products.php') ? 'active' : '' ?>">Products</a>
    <a href="about.php" class="<?= ($currentPage == 'about.php') ? 'active' : '' ?>">About</a>
    <a href="contact.php" class="<?= ($currentPage == 'contact.php') ? 'active' : '' ?>">Contact</a>
  </nav>

  <main>
