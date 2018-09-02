<?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>
<div id="main-head">
            <div class="topbar">
            <ul>
                <div class="hidden-xs hidden-sm col-md-9">
                    <li><a href="http://www.ieee.org/" target="_blank">IEEE.org</a></li>
                    <li><a href="http://ieeexplore.ieee.org/" target="_blank">IEEE <i>Xplore</i></a></li>
                    <li><a href="http://standards.ieee.org/" target="_blank">IEEE Standards</a></li>
                    <li><a href="http://spectrum.ieee.org/" target="_blank">IEEE Spectrum</a></li>
                    <li><a href="http://www.ieee.org/sitemap.html" target="_blank">More Sites</a></li>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3 date">
                    <?php echo "<br>" . "Today is " . date("Y/m/d") . "(" . date("l") . ")" . "<br>"; ?>
                </div>
            </ul>
            </div>
            <div class="jumbotron">                
                <div class="row">
                    <div class="col-xs-12">
                        <a href="index.php"><img src="img/CMRITSB-trans.gif" alt="CMRIT SB" class="img-responsive"></a>
                    </div>                    
                </div>
            </div>
            <nav class="navbar navbar-inverse">
            <div class="container-fluid">
            
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>                
            </div>

            <div class="collapse navbar-collapse" id="main-nav">
            <ul class="nav navbar-nav">
                <li class="<?= ($activePage == 'index') ? 'active':''; ?>"><a href="index.php">Home</a></li>
                <li class="<?= ($activePage == 'membership') ? 'active':''; ?>"><a href="membership.php">Membership</a></li>
                <li class="<?= ($activePage == 'events') ? 'active':''; ?>"><a href="events.php">Events</a></li>
                <li class="<?= ($activePage == 'gallery') ? 'active':''; ?>"><a href="gallery.php">Gallery</a></li>
                <li class="dropdown <?= ($activePage == 'about' || $activePage == 'aboutSB' || $activePage == 'aboutR10' || $activePage == 'aboutBlr') ? 'active':''; ?>">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                          About <span class="caret"></span>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a href="about.php">IEEE</a></li>
                        <li><a href="aboutR10.php">IEEE R10</a></li>
                        <li><a href="aboutBlr.php">IEEE Bangalore Section</a></li>
                        <li><a href="aboutSB.php">IEEE CMRIT SB</a></li>
                      </ul>
                </li>
                <li class="<?= ($activePage == 'execom') ? 'active':''; ?>"><a href="execom.php">Team 2016</a></li>
                <li class="<?= ($activePage == 'contact') ? 'active':''; ?>"><a href="contact.php">Contact Us</a></li>                
            </ul>
            </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
            </nav> <!--NAV-->
            
        </div>