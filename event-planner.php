<!doctype html>
<html class="no-js" lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Event Planner</title>
      <link rel="stylesheet" href="css/app.css">
   </head>
   <body>
      <?php include ('partials/header.php'); ?>
      <div class="heading-banner heading-banner-event">
         <div class="content">
            <h1>Event Planner</h1>
         </div>
      </div>        
      <div class="container">
         <div class="planner-container">
            Content here
         </div>
      </div> <!--/.container--> 
      <div class="promo-box-bg">
         <div class="promo-box-container">
            <?php include ('partials/promo-get-involved.php'); ?> 
            <?php include ('partials/promo-buildings-tours.php'); ?> 
            <?php include ('partials/promo-programme.php'); ?> 
         </div> <!--/.promo-box-container--> 
      </div> <!--/.promo-box-bg-->
       
      <?php include ('partials/footer.php'); ?> 
      <?php include ('partials/js.php'); ?>  
   </body>
</html>