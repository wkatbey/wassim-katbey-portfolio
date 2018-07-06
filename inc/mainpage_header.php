<div class = "hero-image">
  <nav class="navbar navbar-expand-lg navbar-light"  style="background: rgba(119,136,153,0)">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto navbar-right">
        <li class="nav-item">
          <a class="nav-link nav-text" href="mainpage.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-text" href="resume.php">Resume</a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-text" href="codingport.php">Coding Portfolio</a>
        </li>
        <li class = "nav-item">
          <a class="nav-link nav-text" href="http://github.com/wkatbey">Github</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class = "hero-text">
    <h1 style="font-size: 50px; color: #000"><?php 

    if ($_SERVER['REQUEST_URI'] == '/wassim-katbey-portfolio/mainpage.php') 
      echo 'Wassim Katbey';
    else if ($_SERVER['REQUEST_URI'] == '/wassim-katbey-portfolio/resume.php')
      echo 'Resume & References';
    else if ($_SERVER['REQUEST_URI'] == '/wassim-katbey-portfolio/codingport.php')
      echo 'Coding Portfolio';
    ?></h1>
    <p class = "lead font-weight-normal" style="color: #000">
      <?php

         if ($_SERVER['REQUEST_URI'] == '/wassim-katbey-portfolio/mainpage.php') 
          echo ' Elegant web solutions, efficient implementation';
        else if ($_SERVER['REQUEST_URI'] == '/wassim-katbey-portfolio/resume.php')
          echo 'Browse through my skills, education, and experience';
        else if ($_SERVER['REQUEST_URI'] == '/wassim-katbey-portfolio/codingport.php')
          echo 'Browse through independent, work-related, and academic projects';

      ?>


   </p>
  </div>
</div>
