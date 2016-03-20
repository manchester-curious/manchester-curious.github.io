<!doctype html>
<html class="no-js" lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>News Detail</title>
      <link rel="stylesheet" href="css/app.css">
   </head>
   <body>
      <?php include ('partials/header.php'); ?>
      <div class="heading-banner heading-banner-news ">
         <div class="content">
            <h1>News</h1>
         </div>
      </div>        
      <div class="container">
         <div class="news-detail-container">
            <div class="news-details">
               <img src="http://placehold.it/700x400">
               <div class="heading">
                  <p><a href="news-category.php">Category Name</a></p>
               </div>
               <h1>Title of the post goes here</h1>
               <p><small>20th Mar 2016</small></p>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam aperiam autem, nesciunt optio nulla qui, fuga praesentium similique aliquid odio fugit beatae explicabo, in sunt laborum at, voluptas laudantium quas? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error nobis at, laborum optio aspernatur illum rem ipsa quod distinctio vero ducimus deleniti commodi sint facere! Reprehenderit est optio quidem minus.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam aperiam autem, nesciunt optio nulla qui, fuga praesentium similique aliquid odio fugit beatae explicabo, in sunt laborum at, voluptas laudantium quas? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error nobis at, laborum optio aspernatur illum rem ipsa quod distinctio vero ducimus deleniti commodi sint facere! Reprehenderit est optio quidem minus.</p>
            <h2>Heading</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam aperiam autem, nesciunt optio nulla qui, fuga praesentium similique aliquid odio fugit beatae explicabo, in sunt laborum at, voluptas laudantium quas? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error nobis at, laborum optio aspernatur</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam aperiam autem, nesciunt optio nulla qui, fuga praesentium similique aliquid odio fugit beatae explicabo, in sunt laborum at, voluptas laudantium quas? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error nobis at, laborum optio aspernatur illum</p>                        
         </div>
      </div> <!--/.container-->
      <div class="container">
          <div class="see-all">
            <a href="news.php" class="button button-expanded">See All News</a>
          </div>  
      </div> 
      <div class="promo-box-bg">
         <div class="promo-box-container">
            <?php include ('partials/promo-get-involved.php'); ?> 
            <?php include ('partials/promo-event-planner.php'); ?> 
            <?php include ('partials/promo-programme.php'); ?> 
         </div> <!--/.promo-box-container--> 
      </div> <!--/.promo-box-bg-->
       
      <?php include ('partials/footer.php'); ?> 
      <?php include ('partials/js.php'); ?>  
   </body>
</html>