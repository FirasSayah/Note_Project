<?php session_start();
?>
<nav class="navbar navbar-dark bg-dark">

  <!-- Navbar content -->
  <a class="navbar-brand" href="#"> Aslema <?php 
  if(isset($_SESSION['user'])){
    echo $_SESSION['user'];
  }
  ?></a>

</nav>