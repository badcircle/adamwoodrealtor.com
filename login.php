<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adam Wood, REALTOR&reg;</title>
    <link rel="stylesheet" href="css/app.css">
  </head>
  <body class="page_login">
  <div class="layer">
    
  <?php include 'header.php'; ?>

  <div class="grid-x bare" id="main">
    <div class="cell">

    <div class="grid-container">
    <div class="grid-x">
    <div class="cell medium-6 medium-offset-3 small-10 small-offset-1">
        
        <div id="login">
        <form action="<?php echo $_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING']; ?>" method="POST">
        <div class="grid-x">
            <div class="cell auto"><h1>Client Login</h1></div>
        </div>
        <div class="grid-x grid-padding-x">
            <div class="cell small-12 medium-4"><label for="username">Email Address</label></div>
            <div class="cell auto"><input type="text" name="username" id="username" placeholder="email@domain.com" /></div>
        </div>
        <div class="grid-x grid-padding-x">
            <div class="cell small-12 medium-4"><label for="password">Password</label></div>
            <div class="cell auto"><input type="password" name="password" id="password"></div>
        </div>
        <div class="grid-x grid-padding-x">
            <div class="cell auto medium-offset-4">
                <p style="font-size: 90%;"><a href="?forgot">Forgot password?</a> <a style="margin-left: 1rem;" href="contact.php">Not a client?</a></p>
                <input class="button" type="submit" value="Login" id="submit">
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
  </body>
</html>
