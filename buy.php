<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adam Wood, REALTOR&reg;</title>
    <link rel="stylesheet" href="css/app.css">
  </head>
  <body class="page_buy">
  <div class="layer">
    
  <?php include 'header.php'; ?>

  <div class="grid-x bare" id="main">
    <div class="cell">
      
      <div class="grid-container fluid" id="polaroids">
      <div class="grid-container">

        <div class="grid-x elevated">
          <div class="cell small-10 small-offset-1">
            <h1>Your dream home, just clicks away.</h1>
          </div>
        </div>

        <div class="grid-x" id="form_buy" style="margin-top: 3rem;">
          <div class="cell medium-8 medium-offset-2 small-10 small-offset-1" id="form_content">
            <form action="" method="POST" data-abide novalidate>

              <div class="grid-x">
                <div class="cell small-12 medium-12 large-6 auto"><img style="max-width: 70%;" src="img/letterhead_contact_01.png" alt=""></div>
                <div class="cell small-12 large-6 shrink text-center"><img style="max-width: 50%;" src="img/letterhead_contact_1_02.png" alt=""></div>
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
                  <label for="">Tell me about yourself, your family, and some features of your next home<br />
                  <textarea name="comments" id="comments" cols="30" rows="5"></textarea></label>
                </div>

              </div>

              <div class="grid-x grid-margin-x">
                <div class="cell small-12"><span class="label_group">Preferred method of contact:</span></div>
                <div class="cell large-3 small-12"><label for="communicate_phone"><input type="radio" name="communication" value="Phone" id="communicate_phone"> Phone</label></div>
                <div class="cell large-3 small-12"><label for="communicate_text"><input type="radio" name="communication" value="Text (SMS)" id="communicate_text"> Text (SMS)</label></div>
                <div class="cell large-3 small-12"><label for="communicate_facebook"><input type="radio" name="communication" value="Facebook" id="communicate_email"> Facebook</label></div>
                <div class="cell large-3 small-12"><label for="communicate_email"><input type="radio" name="communication" value="Email" id="communicate_email"> Email</label></div>
              </div>

              <div class="grid-x grid-margin-x" style="margin-top: 1rem;">
                <div class="cell small-12"><span class="label_group">When are you expecting to purchase?</span></div>
                <div class="cell small-12"><label for="purchase_days"><input type="radio" name="moving" value="days" id="purchase_days">in the next few days</label></div>
                <div class="cell small-12"><label for="purchase_month"><input type="radio" name="moving" value="month" id="purchase_month"> within the month or next few months</label></div>
                <div class="cell small-12"><label for="purchase_6months"><input type="radio" name="moving" value="6months" id="purchase_6months"> within the next 6 months</label></div>
              </div>

              <div class="grid-x" style="margin-top: 1rem;">
                <div class="cell small-12">
                  <input class="button large" type="submit" value="Submit" style="margin-bottom: 0;" />
                </div>
              </div>
                
            </form>
          </div>
        </div>

        <img src="img/bg_houses/polaroids-1.jpg" class="polaroid polaroid-1" alt="" >
        <img src="img/bg_houses/polaroids-2.jpg" class="polaroid polaroid-2" alt="" >

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
