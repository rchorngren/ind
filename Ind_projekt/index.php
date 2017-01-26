<!DOCTYPE html>
<html>
<head>
    <title>Digitalt CV Robert Horngren Front-End HTML CSS Javascript</title>
    <meta charset="utf-8" />
    <meta name="description" content="Digital CV Individual Project" />
    <meta name="keywords" content="HTML,CSS,Javascript" />
    <meta name="author" content="Robert Horngren" />
    <link rel="stylesheet" type="text/css" href="css.css">
    <link rel="stylesheet" type="text/css" href="css_tablet.css">
    <link rel="stylesheet" type="text/css" href="css_hr.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!--<link rel="stylesheet" type="text/css" href="css/jquery.countdown.css"> -->
    <script type="text/javascript" src="js/jquery.plugin.js"></script> 
    <script type="text/javascript" src="js/jquery.countdown.js"></script>
</head>
<body>
        <div id="wholePage">
            <div id="header">
                <a href="mailto:info@rchorngren.se"><h1>Robert Horngren</h1></a>
                <nav id="top_nav">
                    <ul>
                        <li style="display: none"  class="admin"><a class="header-links" href="Login/">Admin</a></li>
                        <li><a class="header-links" href="index.php?page=home/">Hem</a></li>
                        <li><a class="header-links" href="index.php?page=cv">CV</a></li>
                        <li><a class="header-links" href="index.php?page=portfolio">Portfolio</a></li>
                        <li><a class="header-links" href="index.php?page=stuff">Stuff</a></li>
                    </ul>
                </nav>
            </div>

            <!--<div class="clear"></div>-->
            <div style="display: none" class="secret">Hangman here!</div>
            
            <?php
            $currentPage = '';
            if (isset($_GET['page'])){
				$currentPage = $_GET["page"];
            }
            
            switch($currentPage) {
            	case "home";
            		include ("Pages/home.php");
            	break;
            	case "cv";
            		include ("Pages/cv.php");
            	break;
            	case "portfolio";
            		include ("Pages/portfolio.php");
            	break;
                case "stuff";
                    include ("Pages/stuff.php");
                break;
            	default:
            		include ("Pages/home.php");
            	break;
	            }

            ?>

            <br><br><br>
            <div id="footer">
                <div class="fb-like" data-href="http://rchorngren.se" data-width="100px" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
            </div>
        </div>

    <script src="js.js"></script>
    <!--<script src="Timers.js"></script>-->
</body>
</html>
