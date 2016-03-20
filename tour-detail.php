<!doctype html>
<html class="no-js" lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Tour Name</title>
     <link rel="stylesheet" href="css/vendor/owl.carousel.css">
     <link rel="stylesheet" href="css/vendor/owl.theme.css">      
      <link rel="stylesheet" href="css/app.css">
   </head>
   <body id="tour-detail">
      <?php include ('partials/header.php'); ?>
      <div class="full-width-header">
         <div class="info-container">
            <div class="text-container">
               <h1>Northern Quarter And Ancoats Guided Walk With Ken Moth</h1>
               <p class="venue">Brooks Building, Faculty of Education, Manchester Metropolitan University</p>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis magni iusto, modi nulla! Mollitia enim, libero! Adipisci ad consequuntur, tenetur dolore provident velit officia magni ipsam nam quaerat, dicta sint.</p>
            </div> 
            <div class="slider-container">
               <div class="slider">
                  <div> Your Content </div>
                  <div> Your Content </div>
                  <div> Your Content </div>
                  <div> Your Content </div>
                  <div> Your Content </div>
                  <div> Your Content </div>
                  <div> Your Content </div>
               </div>               
            </div>  
         </div>
      </div>      
      <div class="container">
         <div class="booking-container">
            
         </div>
         <div class="more-info-container">dfgdfg</div>
      </div> <!--/.container--> 
      <div class="promo-box-bg">
         <div class="promo-box-container">
            <?php include ('partials/promo-get-involved.php'); ?> 
            <?php include ('partials/promo-event-planner.php'); ?> 
            <?php include ('partials/promo-programme.php'); ?> 
         </div> <!--/.promo-box-container--> 
      </div> <!--/.promo-box-bg-->
       
      <?php include ('partials/footer.php'); ?> 
      <?php include ('partials/js.php'); ?>
      <script src="js/vendor/owl.carousel.min.js"></script>
      <script>
         $(document).ready(function() {
      
            $(".slider").owlCarousel();
       
         });
      </script>
   </body>
</html>