<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" xmlns:og="http://opengraphprotocol.org/schema/">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta http-equiv="Cache-control" content="public">
		<link rel="author" href="{url}/" />

		<title>{hotelname} - Staff Members</title>

		<meta property="og:url" content="{url}/family">
		<meta property="og:type" content="website">
		<meta property="og:description" content="{meta_description}">
		<meta property="og:title" content="{hotelname} - Virtual World, Avatar Chat and Pixel Art!">
		<meta property="og:site_name" content="Habbeh Hotel">
		<meta property="og:image" content="{imagePath}/app_summary_image-1200x628.85a9f5dc.png">
		<meta property="og:image:height" content="628">
		<meta property="og:image:width" content="1200">

		<meta itemprop="name" content="{hotelname}">
		<meta itemprop="description" content="Check into one of the world\'s largest virtual retro hotels for FREE! Meet and make friends, play games, chat with others, create your avatar, design rooms and more...">
		<meta itemprop="image" content="{imagePath}/app_summary_image-1200x628.85a9f5dc.png">

		<meta name="twitter:card" content="{meta_description}">
		<meta name="twitter:url" content="{url}/family">
		<meta name="twitter:title" content="{hotelname} - Virtual World, Avatar Chat and Pixel Art!">
		<meta name="twitter:description" content="{meta_description}">
		<meta name="twitter:image" content="{imagePath}/app_summary_image-1200x628.85a9f5dc.png">
		<script type="text/javascript">
			var andSoItBegins = (new Date()).getTime();
		</script>
		<link rel="shortcut icon" href="{imagePath}/web-gallery/v2/favicon.ico" type="image/vnd.microsoft.icon" />
		<link rel="stylesheet" href="{imagePath}/web-gallery/static/styles/common_new.css" type="text/css" />
		<script src="{imagePath}/web-gallery/static/js/libs2.js" type="text/javascript"></script>
		<script src="{imagePath}/web-gallery/static/js/visual.js" type="text/javascript"></script>
		<script src="{imagePath}/web-gallery/static/js/libs.js" type="text/javascript"></script>
		<script src="{imagePath}/web-gallery/static/js/common.js" type="text/javascript"></script>
		<script src="{imagePath}/web-gallery/static/js/fullcontent.js" type="text/javascript"></script>
		<link rel="stylesheet" href="{imagePath}/web-gallery/static/styles/settings.css" type="text/css" />
		<script type="text/javascript">
			document.habboLoggedIn = true;
			var habboName = "{username}";
			var habboId = {userid};
			var facebookUser = false;
			var habboReqPath = "";
			var habboStaticFilePath = "{url}/web-gallery";
			var habboImagerUrl = "http://www.habbo.com/habbo-imaging/";
			var habboPartner = "";
			var habboDefaultClientPopupUrl = "{url}/client";
			window.name = "habboMain";
			if (typeof HabboClient != "undefined") {
			  HabboClient.windowName = "26530fff566f9e67da99560b7fe8da6d71d46391";
			  HabboClient.maximizeWindow = true;
			}
		</script>
		<meta name="description" content="{meta_description}" />
		<meta name="keywords" content="{meta_keywords}" />
		<!--[if IE 8]>
		<link rel="stylesheet" href="{imagePath}/web-gallery/static/styles/ie8.css" type="text/css" />
		<![endif]-->
		<!--[if lt IE 8]>
		<link rel="stylesheet" href="{imagePath}/web-gallery/static/styles/ie.css" type="text/css" />
		<![endif]-->
		<!--[if lt IE 7]>
		<link rel="stylesheet" href="{imagePath}/web-gallery/static/styles/ie6.css" type="text/css" />
		<script src="{imagePath}/web-gallery/static/js/pngfix.js" type="text/javascript"></script>
		<script type="text/javascript">
			try { document.execCommand('BackgroundImageCache', false, true); } catch(e) {}
		</script>
		<style type="text/css">
			body { behavior: url(/js/csshover.htc); }
		</style>
		<![endif]-->
		<meta name="build" content="63-BUILD2470 - 30.09.2013 11:10 - com" />
	</head>
	<body id="home" class="">
		<div id="overlay"></div>
		<?php
			$navigatorID = 2;
			require_once('extra/header.php');

			?>
		<div id="content-container">
		<div id="navi2-container" class="pngbg">
			<div id="navi2" class="pngbg clearfix">
				<ul>
					<?php
						$subNavigatorID = 3;
						require_once('extra/sub_header.php');
					?>
				</ul>
			</div>
		</div>
		<div id="container">
			<div id="content" style="position: relative" class="clearfix">

				<div id="column1" class="column">

         {staff}

				</div>

				<div id="column2" class="column">
					<div class="habblet-container ">
						<div class="cbb clearfix settings ">
							<h2 class="title">About {hotelname} Staff</h2>
							<div class="habblet box-content" style="align:left">
								<img src="{imagePath}/Black_002_w03.gif"align="right">The {hotelname} staff team is one big happy family, each staff member has a different role and duties to fulfill. A lot of our team usually consists of players that have been around Habbeh for years, even through different ownership, but this doesn't mean we only recruit old &amp; known players, we recruit those who shine out to us!
							</div>
						</div>
					</div>
					<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>

					<!--<div class="habblet-container ">
						<div class="cbb clearfix settings ">
							<h2 class="title">How do I join the team?</h2>
							<div class="habblet box-content" style="align:left">
								You can apply <a href="{url}/apply">here</a>, every month we open staff applications to look for new potential!
							</div>
						</div>
					</div>

					<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>-->
				</div>
		<?php require_once ('extra/footer.php'); ?>
