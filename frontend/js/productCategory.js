(function($) {

  /*------------------------
     16. Review Page
  ------------------------*/
  $(".clickCategory").click(function() {
    var $thisPane = $(this).children("a").attr('href');
    var $cat_id = $(this).data('id');
    var $page = $(this).data('page');

    if($('.tab-pane').hasClass("active")) {
      $('.tab-pane').removeClass("active");
    }
    $("#ajaxPreloader").show();
    $.ajax({
          type: 'POST',
          url: 'views.php',
          data: {category: $cat_id,page: $page},
          success: function (html) {
              $('.tab-content').children().remove();
              $('.tab-content').append(html).fadeIn();
              $($thisPane).addClass("active");
              $("#ajaxPreloader").hide();
          }
      });
  });

})(jQuery); 