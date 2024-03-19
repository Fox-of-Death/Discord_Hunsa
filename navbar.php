<?php
include("modal.php");
?>

<nav class="navbar navbar-expand-md navbar-light">
  <div class="container">
    <img src="./img/standard.gif" class="rounded me-2" alt="" width="45">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ">
        <li class="nav-item">
          <a class="btn" aria-current="page" href="./index.php"><i class="fa-solid fa-house me-2"></i>Home</a>
        </li>
        <li class="nav-item">
          <a class="btn" href="#" data-bs-toggle="modal" data-bs-target="#aboutModal"><i class="fa-solid fa-circle-question me-2"></i>About</a>
        </li>
        <li class="nav-item">
          <a class="btn" href="#" data-bs-toggle="modal" data-bs-target="#ruleModal"><i class="fa-sharp fa-solid fa-book-bookmark me-2"></i>Rules</a>
        </li>
        <li class="nav-item dropdown">
          <a class="btn dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">คำสั่ง Bots Music</a>
          <ul class="dropdown-menu mt-2" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="./Shira.php">Shira</a></li>
            <li><a class="dropdown-item" href="./Manybaht.php">Manybaht</a></li>
            <li><a class="dropdown-item" href="./Pancake.php">Pancake</a></li>
          </ul>
        </li>
        <ul class="navbar-nav flex-row flex-wrap bd-navbar-nav">
          <li class="nav-item dropdown">
            <a class="btn dropdown-toggle" href="#" id="navbarDropdown_modes" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-brightness-high-fill"></i></a>
            <ul class="dropdown-menu mt-2" aria-labelledby="navbarDropdown_modes" id="mode">  
              <li><a class="dropdown-item" onclick="setMode('white')"><i class="bi bi-brightness-high-fill"></i> Light</a></li>
              <li><a class="dropdown-item" onclick="setMode('dark')"><i class="bi bi-moon-stars-fill"></i> Dark</a></li>
              <li><a class="dropdown-item" onclick="setMode('system')"><i class="bi bi-circle-half"></i> Auto</a></li>
            </ul>
          </li>
        </ul>
      </ul>
    </div>
</nav>



<!-- Modal -->
<!-- <div class="modal fade" id="aboutModal" tabindex="-1" aria-labelledby="aboutModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="aboutModalLabel">About Discord Hunsa</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Discord หรรษา เป็นดิสสำหรับร่วมกลุ่มคนรู้จัก
        </div>
      </div>
    </div>
  </div> -->