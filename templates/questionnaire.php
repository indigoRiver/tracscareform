<?php
include('includes/header.php');
?>
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

        <h1>Tell us a little bit more about you and <span style="color: <?php echo $color; ?>"><?php echo $company; ?></span>...</h1>
        <p>Remember there are no right or wrong answers. You can make them as detailed or as simple as you like.</p>
        <small>Not from <?php echo $company; ?>? <a href="<?php echo $url; ?>">Click here</a> to go back.</small>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <h2 class="text-center">Questionnaire</h2>
      <form action="thankyou.php" method="post">

        <div class="formTop formSection">
          <div class="col-md-8">
              <div class="form-group">
                <label for="nameField">Name</label>
                <input type="text" name="fullName" class="form-control" id="nameField" placeholder="Name">
              </div>
              <div class="form-group">
                <label for="emailField">Email address</label>
                <input type="email" name="emailAddress" class="form-control" id="emailField" placeholder="Email address">
              </div>
              <div class="form-group">
                <label for="jobroleField">Job role</label>
                <input type="text" name="jobRole" class="form-control" id="jobroleField" placeholder="Job role">
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
              <label for="q1">1. Please select what type of service you work for?</label>
              <textarea class="form-control" name="question1" id="q1" rows="3"></textarea>
            </div>
            <div class="form-group">
              <label for="q2">2. When you think of your organisation, what are the first 5 words that come to mind?</label>
              <input type="text" class="form-control" name="question2[]"  id="q2" placeholder="Word one" rows="3"></textarea>
              <input type="text" class="form-control" name="question2[]"  id="q2" placeholder="Word two" rows="3"></textarea>
              <input type="text" class="form-control" name="question2[]"  id="q2" placeholder="Word three" rows="3"></textarea>
              <input type="text" class="form-control" name="question2[]"  id="q2" placeholder="Word four" rows="3"></textarea>
              <input type="text" class="form-control" name="question2[]"  id="q2" placeholder="Word five" rows="3"></textarea>
            </div>
            <div class="form-group">
              <label for="q3">3. What are our company values? </label>
              <textarea class="form-control" name="question3"  id="q3" rows="3"></textarea>
            </div>
            <div class="form-group">
              <label for="q4">4. What do we do well?</label>
              <textarea class="form-control" name="question4"  id="q4" rows="3"></textarea>
            </div>
            <div class="form-group">
              <label for="q5">5. What could we do better?</label>
              <textarea class="form-control" name="question5"  id="q5" rows="3"></textarea>
            </div>
            <div class="form-group">
              <label for="q6">6. What appealed to you about your organisation to make you want to work for them?</label>
              <textarea class="form-control" name="question6"  id="q6" rows="3"></textarea>
            </div>
            <div class="form-group">
              <label for="q7">7. If you were describing your organisation to others, what would you say, and would you recommend them?</label>
              <textarea class="form-control" name="question7"  id="q7" rows="3"></textarea>
            </div>
            <div class="form-group">
              <label for="q8">8. Looking at other people's branding, what logos do you like and why?</label>
              <textarea class="form-control" name="question8"  id="q8" rows="3"></textarea>
            </div>
            <div class="form-group">
              <label for="q9">9. Do you like/dislike the current logo and if so why?</label>
              <textarea class="form-control" name="question9"  id="q9" rows="3"></textarea>
            </div>
            <div class="form-group">
              <label for="q10">10. If you could change anything about your organisation what would it be and why?</label>
              <textarea class="form-control" name="question10"  id="q10" rows="3"></textarea>
            </div>
            <div class="form-group">
              <label for="q11">11. If we were an animal, what animal would we be and why?</label>
              <textarea class="form-control" name="question11"  id="q11" rows="3"></textarea>
            </div>
            <div class="form-group">
              <label for="q12">12. Is there anything else that you want to tell us about our brand, name, logo, or values?</label>
              <textarea class="form-control" name="question12"  id="q12" rows="3"></textarea>
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
