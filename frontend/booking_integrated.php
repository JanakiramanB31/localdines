<?php
  include_once './config/constant.php'; 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title><?php echo COMPANY_NAME; ?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <!-- Google Fonts -->
    <link href="//fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- =======================================================
      * Template Name: Delicious - v4.1.0
      
      * Template URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/
      
      * Author: BootstrapMade.com
      
      * License: https://bootstrapmade.com/license/
      
      ======================================================== -->
    <link href="<?php echo API_URL.'/core/framework/libs/pj/css/pj.bootstrap.min.css'; ?>" type="text/css" rel="stylesheet" />
   	<link href="<?php echo API_URL.'/index.php?controller=pjFrontEnd&action=pjActionLoadCss';?>" type="text/css" rel="stylesheet" />
    <meta name="google-signin-client_id" content="750038061970-or4c1v4uqtnfbi4vj0ohg07fiuhvhp5o.apps.googleusercontent.com" >
  </head>
  <body>
   <script type="text/javascript" src="<?php echo API_URL. '/index.php?controller=pjBookingFront&action=pjActionLoad&locale=1&hide=0&theme=theme10'; ?>"></script>
    <script src="//code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
      // $(function() {
      //  $(".fdBtnLogoutt").click(function(event) {
      //      console.log("clicked logout");
      //      event.preventDefault();
      //      $.post('<?php //echo API_URL.'/index.php?controller=pjFrontEnd&action=pjActionLogout'; ?>').done(function() {
      //        //window.location.href = '<?php //echo FRONT_URL.'menu.php'; ?>';
      //      });
      //    })
      // })
    </script>
    <!-- Vendor JS Files -->
    <script src="//www.google.com/recaptcha/api.js" async defer></script>
   <!--  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
  </body>
</html>