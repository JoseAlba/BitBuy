<?php
session_start();

$_SESSION['loggedin'] = true;



function html5_header($title="", $cssFiles=array()){
    echo <<<ZZEOF
        <title>$title</title>

    		<!-- META DATA -->
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<meta name="description" content="Online retailer selling virtual resources via cryptocurrency"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0"/>

ZZEOF;

    foreach ($cssFiles as $cssFile)
        echo "<link rel='stylesheet' type='text/css' href='$cssFile' />\n";

}

function html5_js($jsFiles=array()){
    foreach ($jsFiles as $jsFile)
        echo "<script src='$jsFile' type='text/javascript'></script>\n";
}


function menu_css(){
    echo <<<ZZEOF
        <link rel='stylesheet' type='text/css' href='../menu/css/reset.css' />
        <link rel='stylesheet' type='text/css' href='../menu/css/style.css' />
ZZEOF;
}


function menu(){


    echo <<<ZZEOF

	<header class="cd-main-header">
		<a class="cd-logo" href="../index.php"><img src="../menu/img/bitcoin-logo.svg" style="background:white; width:10%; height:10%;" alt="Logo" ></a>

		<ul class="cd-header-buttons">
			<li><a class="cd-search-trigger" href="#cd-search">Search<span></span></a></li>
			<li><a class="cd-nav-trigger" href="#cd-primary-nav">Menu<span></span></a></li>
		</ul> <!-- cd-header-buttons -->
	</header>



	<div class="cd-overlay"></div>

	<nav class="cd-nav">
		<ul id="cd-primary-nav" class="cd-primary-nav is-fixed">
			<li class="has-children">
ZZEOF;

            if($_SESSION['loggedin'] == true) {
                echo <<<ZZEOF
			<li>
				<a href="../login.php">Login</a>
            </li>

ZZEOF;
            }

        if($_SESSION['loggedin'] == false){
            echo <<<ZZEOF
ZZEOF;
        }

            echo <<<ZZEOF
		</ul> <!-- primary-nav -->
	</nav> <!-- cd-nav -->

	<div id="cd-search" class="cd-search">
		<form>
			<input type="search" placeholder="Search...">
		</form>
	</div>
<script src="../menu/js/jquery-2.1.1.js"></script>
ZZEOF;
}

function menu_js(){
    echo <<<ZZEOF
        <script src="../menu/js/jquery-2.1.1.js"></script>
        <script src="../menu/js/jquery.mobile.custom.min.js"></script>
        <script src="../menu/js/main.js"></script>

ZZEOF;
}

function footer(){
    echo <<<ZZEOF
    <br><br>
    <div class="row" >
        <ul class="small-block-grid-3 text-center" >
            <li><a href="../contact.php">Contact</a></li>
            <li><a href="../about.php">About</a></li>
        </ul>
    </div>


ZZEOF;

}
function abs_footer(){
    echo <<<ZZEOF
    <br><br>
    <div class="row" >
        <ul class="small-block-grid-3 text-center" >
            <li><a href="../contact.php" style="position: absolute; bottom: 0; margin-bottom:2.5%">Contact</a></li>
            <li><a href="../about.php" style="position: absolute; bottom: 0; margin-bottom:2.5%">About</a></li>
        </ul>
    </div>


ZZEOF;


}