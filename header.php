<!DOCTYPE html>
<html>
	<head>
		<title>Dave Perlman: Musician</title>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <link rel="icon" href="http://www.entertainmentmaine.com/wp-content/uploads/2017/03/icon.png">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Work+Sans:200" rel="stylesheet">
		<?php wp_head(); ?>
	</head>
	<body>
      <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=332585607099644";
         fjs.parentNode.insertBefore(js, fjs);
         }(document, 'script', 'facebook-jssdk'));
      </script>
      <script>
         (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
         (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
         m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
         })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-93005551-1', 'auto');
        ga('send', 'pageview');
      </script>


		<header class="page-head">
      <div class="title-section">
        <h1 class="page-title">Dave Perlman</h1>
        <h2 class="page-subtitle">A musician from Maine.</h2>
      </div>
      <div class="container">
            <input type="checkbox" id="menu-box">
            <label id="hamburger" for="menu-box">&#9776</label>
         <nav>
            <label id="closing-cross" for="menu-box">&#10005;</label>
         <!-- mobile menu -->
            <?php wp_nav_menu(); ?>
         </nav>
      </div>
    </header>