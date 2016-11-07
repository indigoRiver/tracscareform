<?php include('includes/header.php') ?>
<?php
$_SESSION['img'] = $url.'//img/'.$_GET['t'].'.png';

$company = $_SESSION['currentChoice'];
$color = $_SESSION['color'];
$img = $_SESSION['img'];
?>
<div id="barba-wrapper">
  <div class="barba-container">
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron" style="border-bottom: 10px solid <?php echo $color; ?>">

      <div class="container">
        <h1>Thank you for submitting your questionnaire.</h1>

      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <p>Your opinions and perceptions of <?php echo $company; ?> is really importnat to us, so thank you for filling this information out for us.</p>
    </div>
  </div>
</div>

<?php include('includes/footer.php') ?>
