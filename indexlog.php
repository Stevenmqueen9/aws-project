<?php

session_start();
?>

<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>aws steven</title>
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0">
  <style>
    body {
      background-image: url("AWS.JPG");
      background-repeat: no-repeat;
      background-position: right center;
      background-size: cover;
      margin: 0;
    }

    .hero-section {
      background-color: rgba(0, 0, 0, 0.5); 
      padding: 50px;
      color: white;
    }
  </style>
</head>
<body>
  <header>
    <nav class="navbar">
      <a class="logo" href="indexlog.html">STEVEN AWS<span>.</span></a>
      <ul class="menu-links">
        <li><a href="guida.php">guida</a></li>
        <li><a href="tecnologie.php">tecnologie</a></li>
        <li><a href="logout.php">logout</a></li>
    
        <span id="close-menu-btn" class="material-symbols-outlined">close</span>
      </ul>
      <span id="hamburger-btn" class="material-symbols-outlined">menu</span>
    </nav>
  </header>

  <section class="hero-section">
    <div class="content">
      <h1>benvenuto nella navbar puoi scegliere di capire le tecnologie usate per il progetto  e la guida vera e propria passo a passo per creare la web application tramite docker</h1>
     
      </div>
    </div>
  </section>
  
  <script>
    const header = document.querySelector("header");
    const hamburgerBtn = document.querySelector("#hamburger-btn");
    const closeMenuBtn = document.querySelector("#close-menu-btn");
    const searchButton = document.querySelector(".search-form button"); 


    hamburgerBtn.addEventListener("click", () => header.classList.toggle("show-mobile-menu"));

    closeMenuBtn.addEventListener("click", () => hamburgerBtn.click());

    searchButton.addEventListener("click", function (event) {
      event.preventDefault(); 
      alert("Accedere per usare questa funzione");
    });
  </script>
  
</body>
</html>
