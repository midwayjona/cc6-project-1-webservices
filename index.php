<!--

 -->

<?php require __DIR__."/assets/header.php" ?>


<div class="container">
  <div class="row">
    <div class="col-lg-12 col-md-7 mx-auto">
      <?php
      require __DIR__."/assets/filler.php";
      if (isset($_SESSION['cid'])) {
        // code...
        echo "<p>You are logged in</p>";
      } else {
        // code...
        echo "<p>You are logged out</p>";
      }
      ?>
      <div class="card text-center">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
  <div class="card-footer text-muted">
    2 days ago
  </div>
</div>
    </div>
  </div>
</div>

<?php //require __DIR__."/assets/footer.php" ?>
