<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">

    <link rel="shortcut icon" href="images/logo2_purple.png">
    <title>Bloody Wolves</title>

	<!--CSS-->
   	<link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/menu.css" rel="stylesheet">
   	<link href="style.css" rel="stylesheet">


   	<!--SCRIPTS-->
   	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.js"></script>
		<script src="js/teams.js"></script>
   	<!--menu relativo-->

	<script>
		$(function() {
		    var pull = $('#pull');
		    var press=0;
		    menu = $('nav ul');
		    menuHeight = menu.height();

		    $(pull).on('click', function(e) {
		    	e.preventDefault();
		    	menu.slideToggle();
		    });
		});

		$(window).resize(function(){
		    var w = $(window).width();
		    if(w > 320 && menu.is(':hidden')) {
		        menu.removeAttr('style');
		    }
		});
	</script>
	<!--Menu fijo-->
	<script>
	    $(document).ready(function(){
	        var altura = $('.menu').offset().top;

	        $(window).on('scroll', function(){
	            if ( $(window).scrollTop() > altura ){
	                $('.menu').addClass('menu-fixed');
	            } else {
	                $('.menu').removeClass('menu-fixed');
	            }
	        });
	    });
    </script>
</head>

<body>
	<!--MENU-->
	<header>
		<div class="menu">
			<table class="menu_table">
				<tr>
					<td class="menu_social" colspan="7">
						<a href="http://www.facebook.com/bloodywolvesclub"><img src="images/fb_white.png" /></a>
						<a href="http://www.instagram.com/bloody_wolves_club"><img src="images/insta_white.png" /></a>
						<a href="http://www.twitter.com/BloodyWolveClub"><img src="images/twitter_white.png" /></a>
						<a href="http://www.twitch.tv/bloodywolvesclub"><img src="images/twitch_white.png" /></a>
						<!-- youtube no creado
						<a href="http://"><img src="images/youtube_white.png" /></a>
						-->
					</td>
				</tr>
				<tr>
					<td class="menu_logo">
						<a href="index.html"><img src="images/logo2.png"></a>
					</td>
					<td class="menu_option">
						<nav>
							<a id="pull" href="#"></a>
							<ul>
						        <li><a href="index.html">HOME</a></li>
						        <li><a href="history.html">NOSOTROS</a></li>
						        <li><a style="color:#b10f7a" href="teams.html">· TEAMS ·</a></li>
						        <li><a href="contact.html">CONTACTO</a></li><br clear="all" />
						    </ul>
						</nav>
	                </td>
				</tr>
			</table>
		</div>
	</header>
	<!--CONTENT-->
	<div class="content">
	    <div id='teamsGames' class="contentIn">
				<a href="teams.php?c=1"><img src="images/lolLogo.png"  width="30%;"/></a>
				<a href="teams.php?c=2"><img src="images/csgoLogo.png" width="30%;"/><a/>
				<a href="teams.php?c=3"><img src="images/owLogo.png"  width="30%;"/></a>
	    </div>
			<div id='teamsNames'>
				<?php
				switch ($_GET['c'])
				{
					 case '1':
							include("lol.html");
							break;
					 case '2':
							include("csgo.html");
							break;
					 case '3':
							include("ow.html");
							break;
							default:
							include("teamsIntro.html");
				}
				?>
			</div>

	</div>

</body>

</html>
