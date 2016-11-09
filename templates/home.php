<?php include('includes/header.php') ?>
<div id="barba-wrapper">
  <div class="barba-container">

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Tracscare and Brookdale</h1>
        <h2>Thank you for being part of our new brand journey.<h2>
        <p><br />
          We are about to start crafting a new brand for Tracscare and Brookdale we know we cannot do that without your valued input and help.<br /><br />
Your perceptions of the brands you work with and alongside will help us on the journey in creating a more meaningful and emotionally connected brand for all of us to be proud of. Your thoughts and comments are treated with the strictest confidence at all times.
. </p>
        <!--<p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>-->
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <h2 class="text-center">Please select your company to continue to the questionnaire</h2>

      <div class="row">
        <div class="col-md-6">
          <img class="logoButton img-responsive" src="img/tracscare.png" alt="Tracscare logo"/>
          <p class="text-center main-btn-wrap"><a class="btn btn-success" href="templates/questionnaire.php?t=tracscare" role="button">Questionnaire &raquo;</a></p>
        </div>
        <div class="col-md-6">
          <img class="logoButton img-responsive" src="img/brookdale.png" alt="Brookdale logo"/>
          <p class="text-center main-btn-wrap"><a class="btn btn-success" href="templates/questionnaire.php?t=brookdale" role="button">Questionnaire &raquo;</a></p>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php') ?>

<script>
$(document).ready(function(){
  Barba.Pjax.start();
  var FadeTransition = Barba.BaseTransition.extend({
  start: function() {
    /**
     * This function is automatically called as soon the Transition starts
     * this.newContainerLoading is a Promise for the loading of the new container
     * (Barba.js also comes with an handy Promise polyfill!)
     */

    // As soon the loading is finished and the old page is faded out, let's fade the new page
    Promise
      .all([this.newContainerLoading, this.fadeOut()])
      .then(this.fadeIn.bind(this));
  },

  fadeOut: function() {
    /**
     * this.oldContainer is the HTMLElement of the old Container
     */

    return $(this.oldContainer).animate({ opacity: 0 }).promise();
  },

  fadeIn: function() {
    /**
     * this.newContainer is the HTMLElement of the new Container
     * At this stage newContainer is on the DOM (inside our #barba-container and with visibility: hidden)
     * Please note, newContainer is available just after newContainerLoading is resolved!
     */

    var _this = this;
    var $el = $(this.newContainer);

    $(this.oldContainer).hide();

    $el.css({
      visibility : 'visible',
      opacity : 0
    });

    $el.animate({ opacity: 1 }, 400, function() {
      /**
       * Do not forget to call .done() as soon your transition is finished!
       * .done() will automatically remove from the DOM the old Container
       */

      _this.done();
    });
  }
});





/**
 * Next step, you have to tell Barba to use the new Transition
 */

Barba.Pjax.getTransition = function() {
  /**
   * Here you can use your own logic!
   * For example you can use different Transition based on the current page or link...
   */

  return FadeTransition;
};
})
</script>
