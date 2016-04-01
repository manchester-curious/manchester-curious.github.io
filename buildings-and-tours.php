<!doctype html>
<html class="no-js" lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Buildings &amp; Tours</title>
      <link rel="stylesheet" href="css/app.css">
   </head>
   <body>
      <?php include ('partials/header.php'); ?>
      <div class="heading-banner heading-banner-tours">
         <div class="content">
            <h1>Buildings &amp; Tours</h1>
         </div>
      </div>
      <div class="container">
         <div class="tour-type-container">
            <ul class="tour-icons">
              <li><div class="tour-type building"></div><br>Building Tour</li>
              <li><div class="tour-type walking"></div><br>Walking Tour</li>
            </ul>
         </div>             
         <div class="table-container">
            <table class="tours">
               <thead>
                  <tr>
                     <th width="373">Event</th>
                     <th width="374">Venue</th>
                     <th width="40">&nbsp;</th>                     
                     <th width="120">&nbsp;</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td valign="top"><span>Event:</span> Northern Quarter And Ancoats Guided Walk With Ken Moth</td>
                     <td valign="top"><span>Venue:</span> Brooks Building, Faculty of Education, Manchester Metropolitan University</td>
                     <td valign="top"><div class="tour-mobile"><span>Tour type:</span> Walking</div><div class="tour-type walking"></div></td>
                     <td valign="top"><a href="tour-details.php" class="button button-expanded">More</a></td>
                  </tr>
                  <tr>
                     <td valign="top"><span>Event:</span> Northern Quarter And Ancoats Guided Walk With Ken Moth</td>
                     <td valign="top"><span>Venue:</span> Brooks Building, Faculty of Education, Manchester Metropolitan University</td>
                     <td valign="top"><div class="tour-mobile"><span>Tour type:</span> Building</div><div class="tour-type building"></div></td>
                     <td valign="top"><a href="tour-details.php" class="button button-expanded">More</a></td>
                  </tr>
                  <tr>
                     <td valign="top"><span>Event:</span> Northern Quarter And Ancoats Guided Walk With Ken Moth</td>
                     <td valign="top"><span>Venue:</span> Brooks Building, Faculty of Education, Manchester Metropolitan University</td>
                     <td valign="top"><div class="tour-mobile"><span>Tour type:</span> Walking</div><div class="tour-type walking"></div></td>
                     <td valign="top"><a href="tour-details.php" class="button button-expanded">More</a></td>
                  </tr>
               </tbody>
            </table>
         </div>  <!--/.table-container--> 
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
   </body>
</html>