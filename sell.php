<?php
require 'includes/connect.php';

if (!empty($_POST)) {
  
  $put = $dbh->prepare("INSERT INTO `sell` (`name`, `phone`, `email`, `method_of_contact`, `address`, `unit`, `city`, `property_type`, `current_resident`, `bedrooms`, `bathrooms`, `how_soon`, `other_comments`) VALUES (:name, :phone, :email, :method_of_contact, :address, :unit, :city, :property_type, :current_resident, :bedrooms, :bathrooms, :how_soon, :other_comments)");
  $put->bindParam('name', $_POST['name']);
  $put->bindParam('phone', $_POST['phone']);
  $put->bindParam('email', $_POST['email']);
  $put->bindParam('method_of_contact', $_POST['method_of_contact']);
  $put->bindParam('address', $_POST['address']);
  $put->bindParam('unit', $_POST['unit']);
  $put->bindParam('city', $_POST['city']);
  $put->bindParam('property_type', $_POST['property_type']);
  $put->bindParam('current_resident', $_POST['current_resident']);
  $put->bindParam('bedrooms', $_POST['bedrooms']);
  $put->bindParam('bathrooms', $_POST['bathrooms']);
  $put->bindParam('how_soon', $_POST['how_soon']);
  $put->bindParam('other_comments', $_POST['other_comments']);
  $put->execute();
  header("Location: sell.php?thanks");

}

if (isset($_GET['thanks'])) {
  $thanks = true;
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
  <body class="page_sell">
  <div class="layer">
    
  <?php include 'header.php'; ?>

  <div class="grid-x bare" id="main">
    <div class="cell">
      
      <div class="grid-container fluid" id="planning">
      <div class="grid-container">

        <div class="grid-x elevated alt">
          <div class="cell small-10 small-offset-1">
            <h1>Sell with confidence</h1>
            <p>Empower yourself with knowledge of current market trends and sound advice so you can sell your home with confidence.</p>
          </div>
        </div>

        <div class="grid-x" id="form_sell" style="margin-top: 3rem;">
          <div class="cell medium-10 medium-offset-1 large-8 large-offset-2 small-12" id="form_content">
            <form action="" method="POST" data-abide novalidate id="formSell">
              <?php if ($thanks) { ?>
              <img src="img/thanks.png" alt="Thanks" id="thanksImage" />
              <?php } ?>

              <div class="grid-x">
                <div class="cell small-12 large-6 shrink text-center"><img style="min-width: 180px; max-width: 220px;" src="img/letterhead_contact_1_02.png" alt=""></div>
                <div class="cell small-12 medium-12 large-6 text-center auto"><img style="max-width: 220px;" src="img/letterhead_contact_01.png" alt=""></div>
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

              </div>

              <div class="grid-x grid-margin-x">
                <div class="cell small-12"><span class="label_group">Preferred method of contact:</span></div>
                <div class="cell large-3 small-12"><label for="communicate_phone"><input type="radio" name="method_of_contact" value="Phone" id="communicate_phone"> Phone</label></div>
                <div class="cell large-3 small-12"><label for="communicate_text"><input type="radio" name="method_of_contact" value="Text (SMS)" id="communicate_text"> Text (SMS)</label></div>
                <div class="cell large-3 small-12"><label for="communicate_facebook"><input type="radio" name="method_of_contact" value="Facebook" id="communicate_facebook"> Facebook</label></div>
                <div class="cell large-3 small-12"><label for="communicate_email"><input type="radio" name="method_of_contact" value="Email" id="communicate_email"> Email</label></div>
              </div>

              <div class="grid-x grid-margin-x">
                <div class="cell small-12">
                    <label for="">Address<br />
                    <input type="text" name="address" /></label>
                </div>
                <div class="cell small-12 medium-6">
                    <label for="">Unit<br />
                    <input type="text" name="unit" /></label>
                </div>
                <div class="cell small-12 medium-6">
                    <label for="">City<br />
                    <input type="text" name="city" /></label>
                </div>
              </div>

              <div class="grid-x grid-margin-x">
                  <div class="cell small-12 medium-6">
                    <label for="">What Kind of Property Do You Have?
                        <select name="property_type" id="property_type">
                            <option value="">Please Select</option>
                            <option value="Condo">Condo</option>
                            <option value="Apartment">Apartment</option>
                            <option value="Commercial">Commercial</option>
                            <option value="Residential">Residential</option>
                        </select>
                    </label>
                  </div>
                  <div class="cell small-12 medium-6">
                    <label for="">Who Lives There Now?
                        <select name="current_resident" id="current_resident">
                            <option value="">Please Select</option>
                            <option value="Me">Me</option>
                            <option value="Tenant">Tenant</option>
                            <option value="Family">Family</option>
                            <option value="Vacant">Vacant</option>
                        </select>
                    </label>
                  </div>
              </div>

              <div class="grid-x grid-margin-x">
                  <div class="cell small-12 medium-6">
                    <label for="">How Many Bedrooms / Bathrooms?</label>
                    <div class="grid-x grid-margin-x">
                        <div class="cell large-6">
                            <input placeholder="Beds" name="bedrooms" type="number">
                        </div>
                        <div class="cell large-6">
                            <input placeholder="Baths" name="bathrooms" type="number">
                        </div>
                    </div>
                  </div>
                  <div class="cell small-12 medium-6">
                      <label for="">How soon do you want to sale?</label>
                      <input type="text" required name="how_soon" />
                  </div>
                  <div class="cell small-12">
                    <label for="">Anything else I should know right now? Any specific questions?<br />
                    <textarea name="other_comments" id="other_comments" cols="30" rows="5"></textarea></label>
                  </div>
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
    $(document).ready(function() {
      <?php if ($thanks) { ?>
      $("#formSell textarea, #formSell input").prop("disabled", true);
      <?php } ?>
    });
  </script>
  </body>
</html>
