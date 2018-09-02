<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Welcome to IEEE CMRIT SB</title>
		<meta name="description" content="IEEE CMRIT Student Branch<" />
		<meta name="keywords" content="IEEE, CMRIT, cmr, sb, bangalore" />
		<meta name="author" content="UmangaChapagain" />
		<link rel="shortcut icon" href="img/ieee_favicon.png"> 
        <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
        <script type="text/javascript" src="js/modernizr.custom.28468.js"></script>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="css/animate.css"/>
        <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
        <link rel="stylesheet" type="text/css" href="css/custom.css" />
        <noscript>
			<link rel="stylesheet" type="text/css" href="css/nojs.css" />
		</noscript>
		
	</head>
	<body>
    <?php include('fb.php') ?>        
    <div class="container">    
        <?php include('main-head.php') ?>        
        <?php include('slider.php') ?>        
        <br>
        <div class="col-xs-12 col-sm-8" style="padding:0;">
            <?php include('latest_events.php') ?>
            <div class="row">
                <div class="col-xs-12 col-sm-6"><?php include('ieeetvRSS.php') ?></div>
                <div class="col-xs-12 col-sm-6"><?php include('spectrumRSS.php') ?></div>
            </div>
            <?php include('spectrumvideoRSS.php') ?>
        </div>        
    	<div class="col-xs-12 col-sm-4" style="padding:0;">
            <?php include('sidebar.php') ?>
        </div>        
        <?php include('footer.php') ?>
    </div><!--/ container-->
        
		<?php include('scripts.php') ?>
	</body>
</html>
