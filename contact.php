<!doctype html>
<html class="no-js" lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Contact</title>
      <link rel="stylesheet" href="css/app.css">
   </head>
   <body>
      <?php include ('partials/header.php'); ?>
      <div class="heading-banner">
         <div class="content">
            <h1>Contact</h1>
         </div>
      </div>        
      <div class="container">
         <div class="leftcol"><img src="http://placehold.it/600?text=Image+Goes+Here"></div>
         <div class="rightcol">
            <form>
               <div class="row">
                  <div class="input">
                     <label>Type of enquiry
                       <select>
                         <option value="">Option 1</option>
                         <option value="">Option 2</option>
                         <option value="">Option 3</option>
                         <option value="">Option 4</option>
                       </select>
                     </label>
                  </div>
                  <div class="input">
                     <label>Name
                        <input type="text">
                     </label>
                  </div>
                  <div class="input">
                     <label>Company
                        <input type="text">
                     </label>
                  </div>
                  <div class="input">
                     <label>Tel
                        <input type="number">
                     </label>
                  </div>
                  <div class="input">
                     <label>
                       Enquiry
                       <textarea></textarea>
                     </label>
                  </div>
                  <div class="input"> 
                    <div class="input-group-button">
                      <input type="submit" class="button" value="Submit">
                    </div>
                  </div>                                    
               </div>
            </form>

         </div>
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