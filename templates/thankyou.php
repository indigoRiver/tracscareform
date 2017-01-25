<?php include('includes/header.php') ?>

<?php

  ini_set('display_errors',1);
  error_reporting(E_ALL);

  if (isset($_POST['fullName'])) {
    $name = $_POST['fullName'];
    $email = $_POST['emailAddress'];
    $job = $_POST['jobRole'];
    $question1 = $_POST['question1'];
    $question2 = $_POST['question2'];
    $question3 = $_POST['question3'];
    $question4 = $_POST['question4'];
    $question5 = $_POST['question5'];
    $question6 = $_POST['question6'];
    $question7 = $_POST['question7'];
    $question8 = $_POST['question8'];
    $question9 = $_POST['question9'];
    $question10 = $_POST['question10'];
    $question11 = $_POST['question11'];
    $question12 = $_POST['question12'];

    $question2 = implode(",", $question2);

    $company = $_SESSION['currentChoice'];

    $validation = array(
      '<p class="validation">Your name</p>' => $name ,
      '<p class="validation">Email address<p>' => $email,
      '<p class="validation">Job role<p>' => $job,
      '<p class="validation">Question 1<p>' => $question1,
      '<p class="validation">Question 2<p>' => $question2,
      '<p class="validation">Question 3<p>' => $question3,
      '<p class="validation">Question 4<p>' => $question4,
      '<p class="validation">Question 5<p>' => $question5,
      '<p class="validation">Question 6<p>' => $question6,
      '<p class="validation">Question 7<p>' => $question7,
      '<p class="validation">Question 8<p>' => $question8,
      '<p class="validation">Question 9<p>' => $question9,
      '<p class="validation">Question 10<p>' => $question10
    );

    $verification = true;

    foreach($validation as $key=>$value){
      if(empty($value)){

          echo "You must fill out ".$key." to complete the questionnaire.";
          $verification = false;
      }
    }

    if($verification == true){
      $sql = 'INSERT into tracscare_questionaire (name, email_address, job_role, question_1, question_2, question_3, question_4, question_5, question_6, question_7, question_8, question_9, question_10, question_11, question_12, time_submitted, company) VALUES("'.$name.'" , "'.$email.'" , "'.$job.'" , "'.$question1.'" , "'.$question2.'" , "'.$question3.'" , "'.$question4.'" , "'.$question5.'" , "'.$question6.'" , "'.$question7.'" , "'.$question8.'" , "'.$question9.'" , "'.$question10.'", "'.$question11.'", "'.$question12.'", NOW(), "'.$company.'")';
      mysqli_query($connection, $sql) or die(mysqli_error($connection));;
    } else {
      echo "I'm sorry but your information hasn't been submitted. Please try again.";
    }

    if($verification == true){
?>

<?php

  //$_SESSION['img'] = $url.'//img/'.$_GET['t'].'.png';

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
        <p>Your perceptions of <?php echo $company; ?> are really important to us, so thank you for filling this information out.</p>
      </div>
    </div>
  </div>

<?php
   }
}
include('includes/footer.php');
?>
