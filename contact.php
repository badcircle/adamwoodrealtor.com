<?php
require 'includes/connect.php';

if (!empty($_POST)) {
  
  $put = $dbh->prepare("INSERT INTO `buy` (`name`,`phone`,`email`,`method_of_contact`,`comments`) VALUES (:name, :phone, :email, :contact, :comments)");
  $put->bindParam('name', $_POST['name']);
  $put->bindParam('phone', $_POST['phone']);
  $put->bindParam('email', $_POST['email']);
  $put->bindParam('contact', $_POST['communication']);
  $put->bindParam('comments', $_POST['comments']);
  $put->execute();
  header("Location: buy.php?thanks");

}

?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adam Wood, REALTOR&reg;</title>
    <link rel="stylesheet" href="css/app.css">
  </head>
  <body class="page_contact">
  <div class="layer">
    
  <?php include 'header.php'; ?>

  <div class="grid-x bare" id="main">
    <div class="cell">
      
      <div class="grid-container fluid">
      <div class="grid-container">

        <div class="grid-x elevated contact">
          <div class="cell small-10 small-offset-1">
            <h1>Get in touch</h1>
            <p>Do you have questions about the market, the buying or selling process, or how to maximize your home's value? Let's chat!</p>
          </div>
        </div>

        <div class="grid-x" id="form_buy" style="margin-top: 3rem;">
          <div class="cell medium-10 medium-offset-1 large-8 large-offset-2 small-12" id="form_content">
            <form action="" method="POST" data-abide novalidate>

              <div class="grid-x">
                <div class="cell small-12 large-6 shrink text-center"><img style="min-width: 180px; max-width: 220px;" src="img/letterhead_contact_1_02.png" alt=""></div>
                <div class="cell small-12 medium-12 text-center large-6 auto"><img style="max-width: 220px;" src="img/letterhead_contact_01.png" alt=""></div>
              </div>
              
              <div class="grid-x grid-margin-x" style="margin-top: 1rem;">
                <div class="cell small-12 large-6">
                  <label for="">Your Name<br />
                  <input type="text" required name="name" /></label>
                </div>

                <div class="cell small-12 large-6">
                  <label for="">Phone Number<br />
                  <input type="text" required name="phone" /></label>
                </div>

                <div class="cell small-12">
                  <label for="">Email<br />
                  <input type="text" required name="email" /></label>
                </div>

                <div class="cell small-12">
                  <label for="">Comments<br />
                  <textarea name="comments" id="comments" cols="30" rows="5"></textarea></label>
                </div>

              </div>

              <div class="grid-x grid-margin-x">
                <div class="cell small-12"><span class="label_group">Preferred method of contact:</span></div>
                <div class="cell large-3 small-12"><label for="communicate_phone"><input type="radio" name="communication" value="Phone" id="communicate_phone"> Phone</label></div>
                <div class="cell large-3 small-12"><label for="communicate_text"><input type="radio" name="communication" value="Text (SMS)" id="communicate_text"> Text (SMS)</label></div>
                <div class="cell large-3 small-12"><label for="communicate_facebook"><input type="radio" name="communication" value="Facebook" id="communicate_facebook"> Facebook</label></div>
                <div class="cell large-3 small-12"><label for="communicate_email"><input type="radio" name="communication" value="Email" id="communicate_email"> Email</label></div>
              </div>

              <div class="grid-x" style="margin-top: 1rem;">
                <div class="cell small-12">
                  <input class="button large" type="submit" value="Submit" style="margin-bottom: 0;" />
                </div>
              </div>
                
            </form>
          </div>
        </div>

      </div>
      </div>

    </div>
  </div>

  <?php include 'newsletter.php'; ?>

  <?php include 'footer.php'; ?>

  </div>
  <?php include 'globalscripts.php'; ?>
  <script type="text/javascript">
    $(document).ready({

    });
  </script>
  </body>
</html>
