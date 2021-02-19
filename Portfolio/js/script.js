$(document).ready(function() {
/* w3schools, "Try jquery eff animate smoothscroll," 2017. [Online]. Available: https://www.w3schools.com/jquery/tryit.asp?filename=tryjquery_eff_animate_smoothscroll. */
  $("a").on("click", function (event) {
    if (this.hash !== "") {
      event.preventDefault();
      var hash = this.hash;
      $("html, body").animate({
        scrollTop: $(hash).offset().top
      }, 800, function () {
        window.location.hash = hash;
      });
    }
  });
});