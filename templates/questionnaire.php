<?php include('includes/header.php') ?>
<?php
if(isset($_GET['t']) && $_GET['t'] == 'tracscare'){
  $_SESSION['currentChoice'] = 'tracscare';
}
if(isset($_GET['t']) && $_GET['t'] == 'brookdale'){
  $_SESSION['currentChoice'] = 'brookdale';
}
?>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>You're from <?php echo $_SESSION['currentChoice']; ?></h1>

      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <h2 class="text-center">Questionnaire</h2>


    </div>

<?php include('includes/footer.php') ?>
