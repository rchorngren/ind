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
</head>
<body>


        <div id="wholePage">
            <div id="header">
                <a href="mailto:info@rchorngren.se"><h1>Robert Horngren</h1></a>
                <nav id="top_nav">
                    <ul>
                        <li><a class="header-links" href="index.php?page=home/">Hem</a></li>
                        <li><a class="header-links" href="index.php?page=cv">CV</a></li>
                        <li><a class="header-links" href="index.php?page=portfolio">Portfolio</a></li>
                    </ul>
                </nav>
            </div>

            <div class="clear"></div>
            
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
            	default:
            		include ("Pages/home.php");
            	break;
	            }

            ?>


            <div id="footer">
                <div class="fb-like" data-href="http://rchorngren.se" data-width="100px" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
            </div>
        </div>
    <script src="js.js"></script>
    <script src="Timers.js"></script>
</body>
</html>
