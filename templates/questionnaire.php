<?php include('includes/header.php') ?>
<?php
if(isset($_GET['t']) && $_GET['t'] == 'tracscare'){
  $_SESSION['currentChoice'] = 'tracscare';
}
if(isset($_GET['t']) && $_GET['t'] == 'brookdale'){
  $_SESSION['currentChoice'] = 'brookdale';
}
$company = $_SESSION['currentChoice'];
?>
<div id="barba-wrapper">
  <div class="barba-container">

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>So, you're from <?php echo $company; ?>...</h1>
        <p>Please carry on my entering as much information as you can into the form below.</p>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <h2 class="text-center">Questionnaire</h2>
      <div class="col-md-8">
        <form>
          <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Name">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Email address</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Email address">
          </div>
          <div class="form-group">
            <label for="exampleInputFile">File input</label>
            <input type="file" id="exampleInputFile">
            <p class="help-block">Example block-level help text here.</p>
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox"> Check me out
            </label>
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>
      </div>
      <div class="col-md-4">
        <h4>Get started with the form...</h4>
        <p>Please begin by filling out your name and other personal details. You'll then be asked questions more specifically to do with <strong><?php echo $company  ?></strong></p>
      </div>

    </div>
  </div>
</div>

<?php include('includes/footer.php') ?>
