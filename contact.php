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
    <link href="css/contact.css" rel="stylesheet">
   	<link href="style.css" rel="stylesheet">

   	<!--SCRIPTS-->
   	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.js"></script>
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
						<img src="images/fb_white.png" />
						<img src="images/twitch_white.png" />
						<img src="images/twitter_white.png" />
						<img src="images/youtube_white.png" />
						<img src="images/insta_white.png" />
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
						        <li><a href="teams.html">TEAMS</a></li>
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
		<?php
				$action=$_REQUEST['action'];
				if ($action=="")    /* display the contact form */
				    {
				    ?>
				    <form class="form-style-7" action="" method="POST" enctype="multipart/form-data">
				    <ul>
						<li>
						    <label for="name">Nombre</label>
						    <input type="text" name="name" maxlength="100">
						    <span>Escribe tu nombre aquí</span>
						</li>
						<li>
						    <label for="email">Email</label>
						    <input type="email" name="email" maxlength="100">
						    <span>Escribe una dirección de correo válida</span>
						</li>
						<li>
						    <label for="message">Mensaje</label>
						    <textarea size=500 rows="4" cols="50" name="message"></textarea>
						    <span>Escribe tu mensaje</span>
						</li>
						<li>
						    <input type="submit" value="Enviar Mensaje" >
						</li>
					</ul>
				    </form>
				    <?php
				    }
				else                /* send the submitted data */
				    {
				    $name=$_REQUEST['name'];
				    $email=$_REQUEST['email'];
				    $message=$_REQUEST['message'];
				    if (($name=="")||($email=="")||($message==""))
				        {
				        echo "All fields are required, please fill <a href=\"\">the form</a> again.";
				        }
				    else{
				        $from="From: $name<$email>\r\nReturn-path: $email";
				        $subject="Message sent using your contact form";
				        mail("webservice.vira@gmail.com", $subject, $message, $from);
				        echo "Email sent!";
				        }
				    }
				?>

	</div>

</body>

</html>
