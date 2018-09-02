<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Membership - IEEE CMRIT SB</title>
		<meta name="description" content="IEEE CMRIT Student Branch<" />
		<meta name="keywords" content="IEEE, CMRIT, cmr, sb, bangalore" />
		<meta name="author" content="UmangaChapagain" />
		<link rel="shortcut icon" href="img/ieee_favicon.png"> 
        <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="css/animate.css"/>
        <link rel="stylesheet" type="text/css" href="css/custom.css" />		
	</head>
	<body>
    <?php include('fb.php') ?>  
    <div class="container">    
        <?php include('main-head.php') ?>            
        <div class="col-xs-12 wrapper" style="padding:0;">
    <div class="panel panel-default">
    <div class="panel-heading">
     <h3><?php echo $event_name; ?></h3>
     <a class="btn btn-success" href="https://goo.gl/mZrrb5" target="_blank">Join Event</a>
    </div>
    
    <div class="panel-body">  
                <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                    <img src="<?php echo $event_thumb; ?>" class="img-responsive" style="margin:0 auto;">    
                </div> 
                <div class="col-xs-12 col-sm-4 col-sm-offset-4">
                   <i>
                   Event Date : <?php echo $event_date; ?> <br>
                   Event Time : <?php echo $event_time; ?> <br> 
                   Event Location : <?php echo $event_location; ?> <br>
                   Attending : NA<br>
                   </i>
                </div>        
    </div>
</div>
             </div>        
    	      
        <?php include('footer.php') ?>
    </div><!--/ container-->
        
		<?php include('scripts.php') ?>
	</body>
</html>