<?php include('includes/header.php') ?>
<?php
if(isset($_GET['t']) && $_GET['t'] == 'tracscare'){
  $_SESSION['currentChoice'] = 'Tracscare';
  $_SESSION['color'] = '#333366';

}
if(isset($_GET['t']) && $_GET['t'] == 'brookdale'){
  $_SESSION['currentChoice'] = 'Brookdale';
  $_SESSION['color'] = '#ff9933';
}
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
        <img class="img-responsive " src="<?php echo $img; ?>" />

        <h1>So, you're from <span style="color: <?php echo $color; ?>"><?php echo $company; ?></span>...</h1>
        <p>Please carry on by entering as much information as you can into the form below.</p>
        <small>Not from <?php echo $company; ?>? <a href="<?php echo $url; ?>">Click here</a> to go back.</small>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <h2 class="text-center">Questionnaire</h2>
      <form action="<?php echo $url; ?>/templates/thankyou.php">

        <div class="formTop formSection">
          <div class="col-md-8">
              <div class="form-group">
                <label for="nameField">Name</label>
                <input type="text" class="form-control" id="nameField" placeholder="Name">
              </div>
              <div class="form-group">
                <label for="emailField">Email address</label>
                <input type="email" class="form-control" id="emailField" placeholder="Email address">
              </div>
              <div class="form-group">
                <label for="jobroleField">Job role</label>
                <input type="password" class="form-control" id="jobroleField" placeholder="Job role">
              </div>

          </div>
          <div class="col-md-4">
            <h4>Get started with the form...</h4>
            <p>Please begin by filling out your name and other personal details. You'll then be asked questions more specifically to do with <strong><?php echo $company  ?></strong></p>
          </div>
        </div>
        <div class="clear"></div>
        <div class="formBottom formSection">
          <div class="col-md-8">
            <div class="form-group">
              <label for="q1">What qualities and characteristics do you want people to think of when they hear your name or see your product?</label>
              <textarea class="form-control" id="q1" rows="3"></textarea>
            </div>
            <div class="form-group">
              <label for="q2">What feelings do you want them to have?</label>
              <textarea class="form-control" id="q2" rows="3"></textarea>
            </div>
            <div class="form-group">
              <label for="q3">What do you want them to expect?</label>
              <textarea class="form-control" id="q3" rows="3"></textarea>
            </div>
            <div class="form-group">
              <label for="q4">Can you support all those ideas in fact? If not, what do you have to do to make it true?</label>
              <textarea class="form-control" id="q4" rows="3"></textarea>
            </div>
            <div class="form-group">
              <label for="q5">What can you honestly say sets you apart? Look at everything</label>
              <textarea class="form-control" id="q5" rows="3"></textarea>
            </div>
            <div class="form-group">
              <label for="q6">Values - what are they, are they confused or disjointed?</label>
              <textarea class="form-control" id="q6" rows="3"></textarea>
            </div>
            <div class="form-group">
              <label for="q7">Has the vision changed?</label>
              <textarea class="form-control" id="q7" rows="3"></textarea>
            </div>
            <div class="form-group">
              <label for="q8">Why doesn't it work now and what does it need to do?</label>
              <textarea class="form-control" id="q8" rows="3"></textarea>
            </div>
            <div class="form-group">
              <label for="q9">Mission - do you have one - have we changed, do is it need to evolve now with where we are...</label>
              <textarea class="form-control" id="q9" rows="3"></textarea>
            </div>



          </div>
          <div class="col-md-4">
            <h4>Questions about <?php echo $company; ?></h4>
            <p>Now please fill out the questions which will help us gain an understanding into <?php echo $company; ?> and how it's perceived internally.</p>
          </div>

        </div>
        <div class="clear"></div>
        <button id="submitBtn" type="submit" class="btn btn-success btn-lg">Submit</button>
      </form>


    </div>
  </div>
</div>

<?php include('includes/footer.php') ?>
