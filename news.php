<!doctype html>
<html class="no-js" lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>News</title>
      <link rel="stylesheet" href="css/app.css">
   </head>
   <body>
      <?php include ('partials/header.php'); ?>
      <div class="heading-banner">
         <div class="content">
            <h1>News</h1>
         </div>
      </div>        
      <div class="container">
         <div class="news-container" data-equalizer data-equalize-on="small">
            <?php include ('partials/module-news.php'); ?> 
            <?php include ('partials/module-news.php'); ?>
            <?php include ('partials/module-news.php'); ?> 
            <?php include ('partials/module-news.php'); ?> 
            <?php include ('partials/module-news.php'); ?> 
            <?php include ('partials/module-news.php'); ?> 
            <?php include ('partials/module-news.php'); ?> 
            <?php include ('partials/module-news.php'); ?>                                                   
         </div>
      </div> <!--/.container--> 
      <div class="promo-box-bg">
         <div class="promo-box-container">
            <?php include ('partials/promo-building-tours.php'); ?> 
            <?php include ('partials/promo-event-planner.php'); ?> 
            <?php include ('partials/promo-programme.php'); ?> 
         </div> <!--/.promo-box-container--> 
      </div> <!--/.promo-box-bg-->
       
      <?php include ('partials/footer.php'); ?> 
      <?php include ('partials/js.php'); ?>  
   </body>
</html>