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
            <div class="home-wrapper" data-align="left">
                <div class="grid-x">
                    <div class="cell small-12 medium-7 photo">
                        <img src="houses/10110-vernon1.jpg" alt="10110 Vernon Ave">
                    </div>
                    <div class="cell small-12 medium-5">
                        <div class="home-inner">
                            <div class="stats">
                                <div class="address">10110 Vernon Ave, Lubbock, TX 79423</div>
                                <div class="entryItems">
                                    <div class="entry">
                                        <label class="label" for="Baths">Beds</label> 3
                                    </div>
                                    <div class="entry">
                                        <label class="label" for="Baths">Baths</label> 3
                                    </div>
                                    <div class="entry">
                                        <label for="sqft" class="label">Sq. Ft.</label> 1,575
                                    </div>
                                    <div class="entry">
                                        <label for="lotSqft" class="label">Lot Sq. Ft.</label> 5,750
                                    </div>
                                </div>
                                <div class="price">$207,500</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="home-wrapper" data-align="right">
                <div class="grid-x">
                    <div class="cell small-12 medium-7 photo">
                        <img src="houses/10110-vernon1.jpg" alt="10110 Vernon Ave">
                    </div>                    
                    <div class="cell small-12 medium-5">
                        <div class="home-inner">
                            <div class="stats">
                                <div class="address">10110 Vernon Ave, Lubbock, TX 79423</div>
                                <div class="entryItems">
                                    <div class="entry">
                                        <label class="label" for="Baths">Beds</label> 3
                                    </div>
                                    <div class="entry">
                                        <label class="label" for="Baths">Baths</label> 3
                                    </div>
                                    <div class="entry">
                                        <label for="sqft" class="label">Sq. Ft.</label> 1,575
                                    </div>
                                    <div class="entry">
                                        <label for="lotSqft" class="label">Lot Sq. Ft.</label> 5,750
                                    </div>
                                </div>
                                <div class="price">$207,500</div>
                            </div>
                        </div>
                    </div>
                </div>
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
        if ($(this).attr('data-align') == 'right') {
            $(this).find('>:first-child').find(">:first-child").addClass("medium-order-2").next('.cell').css('text-align', 'right');
        }
    });
  });
  </script>
  </body>
</html>
