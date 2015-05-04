$(function(){

  var mobileNavToggle = function() {
    var navTrigger = $('.btn-mobile');
    var navLinks = $('.nav-links');
    
    navTrigger.bind('click', function(e){
      e.preventDefault();
      $(this).toggleClass('is-active');
      $(navLinks).toggleClass('is-active');
    });
  }

  var labelFade = function() {
    var label = $('.form-label-fade label');
    var input = $('.form-label-fade input');
  
    $(input).on("focus", function(){
      $(this).parent().find(label).fadeOut();
    });
    $(input).on("blur", function(){
      var iValue = $(this).val();
      if (iValue == "") {
        $(this).parent().find(label).fadeIn();
      }
    });
  }

  mobileNavToggle();
  labelFade();

});