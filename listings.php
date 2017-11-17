<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adam Wood, REALTOR&reg;</title>
    <link rel="stylesheet" href="css/app.css">
  </head>
  <body class="page_listings">
  

  <?php include 'header.php'; ?>

  <div class="grid-x bare" id="main">
    <div class="cell">
    
    <div class="grid-container">
        <div class="grid-x">
        <div class="cell small-10 small-offset-1">
            <h1 style="font-size: 250%;">Featured Lubbock Homes</h1>
        </div>
        </div>
    </div>

    <div class="grid-container">
        <div class="grid-x">
        <div class="cell small-12">
            <div class="home-wrapper" data-align="left" data-image="10110-vernon1.jpg">
                Test
            </div>
            <div class="home-wrapper" data-align="right" data-image="10110-vernon1.jpg">
                Test
            </div>
        </div>
        </div>
    </div>

    </div>
  </div>

  <?php include 'newsletter.php'; ?>

  <?php include 'footer.php'; ?>

  
  <?php include 'globalscripts.php'; ?>
  <script type="text/javascript">
  $(document).ready(function(){
    $('.home-wrapper').each(function() {
        var bg = "url('houses/"+$(this).attr('data-image')+"')";
        $(this).css('background-image', bg);
        if ($(this).attr('data-align') == 'right') {
            $(this).addClass('align-right');
        }
    });
  });
  </script>
  </body>
</html>
