<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" xmlns:og="http://opengraphprotocol.org/schema/">
<head>
	<title>{hotelname} - Oh Bobba, page not found!</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />

		<meta name="description" content="{meta_description}" />
		<meta name="keywords" content="{meta_keywords}" />

		<meta property="og:url" content="{url}/404">
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
		<meta name="twitter:url" content="{url}/404">
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



	<script type="text/javascript">
	document.habboLoggedIn = true;
	var habboName = "{username}";
	var habboId = {userid};
	var facebookUser = false;
	var habboReqPath = "";
	var habboStaticFilePath = "{imagePath}/web-gallery";
	var habboImagerUrl = "http://www.habbo.com/habbo-imaging/";
	var habboPartner = "";
	var habboDefaultClientPopupUrl = "{url}/client";
	window.name = "habboMain";
	if (typeof HabboClient != "undefined") {
		HabboClient.windowName = "6a9a9769eb5648401739325cb0a6850d5be8ad6e";
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
<body id="home" class=" ">
<div id="overlay"></div>

<?php

$navigatorID = 0;
require_once ('extra/header.php');

?>

<div id="content-container">

<div id="container">
	<div id="content" style="position: relative" class="clearfix">
		<div id="column1" class="column">
			<div class="habblet-container ">
				<div class="cbb clearfix red ">
					<h2 class="title">Page not found!</h2>
					<div id="notfound-content" class="box-content">
					<img id="error-image" src="{imagePath}/web-gallery/v2/images/error.gif" />
					<p>Unfortunately there has been an error with your request. This could be because the page you requested is non-existant, or there may have been an internal server error. If this issue is persistent please contact an administrator.</p>
</div>
			</div></div>
			<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>
		</div>
		<div id="column2" class="column">
<div class="habblet-container ">
<div class="cbb clearfix green ">
	<h2 class="title">Were you looking for...</h2>
<div id="notfound-looking-for" class="box-content">

<p><b>A Group or Personal Page?</b><br/>
    Check out the <a href="{url}/community">Community</a></p>

    <p><b>The Client?</b><br/>
    Visit the <a href="{url}/client">Client</a></p>

</div>
</div>
</div>
<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>
</div>

<?php require_once ('extra/footer.php'); ?>
