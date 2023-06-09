<?php

require ("formular.php");
require ("databaza.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Karin Lopatovska</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <link rel="stylesheet" href="main.css">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">

  <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
    <a class="navbar-brand" href="#">Zivotopis</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#about">O mne</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#experience">Experience</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#education">Vzdelanie</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#skills">Dovednosti</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#interests">Zaujmy</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container mt-5">

    <section id="about">
      <div class="jumbotron">
        <h1>Karin Lopatovska</h1>
        <div class="subheading">
          Bardejovska 3 · Kezmarok, 060 01 · (317) 585-8468 · karinlopatovska63@EMAIL.COM
        </div>
        <p>
          Volám sa Karin Lopatovská. Študujem na Súkromnej strednej odbornej škole v Poprade, na odbore Inteligentné technológie. <br>
        </p>
        <img src="img/ja.JPG" class="obrazok" alt="">
      </div>
    </section>

    <section id="experience">
      <h2>Experience</h2>
      <div class="d-flex flex-column flex-md-row justify-content-between mb-3">
        <div>
          <h3>NONE</h3>
          <img src="img/experience.jpg" class="obrazok" alt="">
        </div>
      </div>
    </section>

    <section id="education">
      <h2>Vzdelanie</h2>
      <p>
        Základná škola, Dr. Daniela Fischera 2, Kežmarok <br>
        Súkromná stredná odborná škola, Ul. 29. augusta 4812, 058 01
      </p>
    </section>

    <section id="skills">
      <h2>Dovednosti</h2>
      <p>
        Skúsenosti s programovaním v jazykoch Python, PHP <br>
        Programovanie webstránok (HTML, CSS, JS)
      </p>
    </section>

    <section id="contact">
      <h2>Zaujmy</h2>
      <p>
        Vždy ma fascinovalo cestovanie a možnosť spoznávať nové destinácie. Od rušných ulíc pulzujúcich miest až po pokojnú krásu odľahlých krajín nachádzam obrovskú radosť z ponorenia sa do rôznych kultúr a prijímania jedinečných zážitkov. 
      </p>
    </section>

    <section id="contact">
      <h2>Contact</h2>
      <form method="post">
            

        <div class="mb-3 mt-5 text-center">
          <label for="name" class="form-label">Meno</label>
          <input type="text" name="first_name" id="first_name"class="form-control" id="formGroupExampleInput" placeholder="vlozte vase meno">
        </div>
        <div class="mb-3 text-center">
          <label for="last_name" class="form-label">Priezvisko</label>
          <input type="text" name="last_name" id="last_name" class="form-control" id="formGroupExampleInput2" placeholder="vlozte priezvisko">
        </div>
        <div class="mb-3 text-center">
          <label for="email" class="form-label">emailova adresa</label>
          <input type="text" name="email" id="email" class="form-control" id="formGroupExampleInput2" placeholder="UwU63@gmail.com">
        </div>
        <div class="mb-3 text-center">
          <label for="message" class="form-label">Napiste nam spravu</label>
          <textarea class="form-control" name="message" id="exampleFormControlTextarea1 message"  rows="3"></textarea>
        </div>


        
        <div class="row justify-content-center align-items-center">
          <div class="col-md-1">
            <button type="submit" name="submit" id="submit" class="btn btn-success justify-content-center align-items-center">Odoslat</button> <br>
            <!-- <button class="btn btn-success justify-content-center align-items-center"><a href="register.php" style="text-decoration: none; color: white;">registracia</a></button> -->
          </div>
        </div>
    </section>

  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="main.js"></script>

</body>

</html>
