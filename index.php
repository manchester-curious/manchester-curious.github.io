<!doctype html>
<html class="no-js" lang="en">
   <head>
     <meta charset="utf-8">
     <meta http-equiv="x-ua-compatible" content="ie=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Manchester Curious</title>
     <link rel="stylesheet" href="css/vendor/owl.carousel.css">
     <link rel="stylesheet" href="css/vendor/owl.theme.css">     
     <link rel="stylesheet" href="css/app.css">
   </head>
   <body>
     <?php include ('partials/header.php'); ?>
     <div class="slider-container">
         <div id="slider" class="owl-carousel owl-theme">
               <!--
             <div class="item" style="background-image:url(http://placehold.it/1380x600);"></div>
             <div class="item" style="background-image:url(http://placehold.it/1380x600);"></div>
               -->

              <div class="item"><img src="http://placehold.it/1380x560"></div>
              <div class="item"><img src="http://placehold.it/1480x560"></div>
         </div>
     </div>
      <div class="container">
          <div class="intro-text">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro molestiae iusto quisquam facere praesentium, aperiam ut soluta voluptate provident atque beatae voluptatem modi, ducimus dignissimos, eius culpa sunt repellat. Nobis.</p>
          </div>
      </div> <!--/.container-->

      <div class="container featured-tours" data-equalizer data-equalize-on="small">
          <div class="heading">
              <h2>Featured Tours</h2>
          </div>
          <?php include ('partials/module-tours.php'); ?> 
          <?php include ('partials/module-tours.php'); ?> 
      </div> <!--/.container-->
      <div class="container">
          <div class="see-all">
            <h3>Curious for more?</h3>
            <a href="buildings-and-tours.php" class="button button-expanded">See All Tours</a>
          </div>  
      </div>
      <div class="container" data-equalizer data-equalize-on="small">
          <div class="heading">
              <h2>Latest News</h2>
          </div>
            <?php include ('partials/module-news.php'); ?> 
            <?php include ('partials/module-news.php'); ?>          
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
 
  var owl = $("#slider");
 
  owl.owlCarousel({
    navigation : true,
    singleItem : true,
    transitionStyle : "fade"
  });
 
});
</script>
   </body>
</html>
