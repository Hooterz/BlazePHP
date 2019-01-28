<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>{hotelname} - Banned!</title>

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
	var habboStaticFilePath = "{url}/web-gallery";
	var habboImagerUrl = "http://www.habbo.com/habbo-imaging/";
	var habboPartner = "";
	var habboDefaultClientPopupUrl = "{url}/client";
	window.name = "habboMain";
	if (typeof HabboClient != "undefined") {
		HabboClient.windowName = "d7c6982e6ffb3a7298ef1cb1ff93d3e4f285b4ae";
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

	<style type="text/css">
		hr {background-color:#CCC;border:0;height:1px;margin:10px 0;}
	</style>

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
					<h2 class="title"><span style="float: left;">You have been banned from {hotelname}!</span></h2>
					<div style="padding: 5px" align='left'>
						Uh oh! It appears that you've been banned from {hotelname}.<br />
						<hr/>
						<b>Banned by:</b> {addedby}<br/>
						<b>Ban Reason:</b> {reason}<br/>
						<b>Date of ban:</b> {addeddate}<br/>
						<b>Ban Expiry:</b>&nbsp; {expire}<br/>
					</div>
				</div>
			</div>

			<div class="habblet-container ">
				<div class="cbb clearfix settings ">
					<h2 class="title"><span style="float: left;">Final Log - In-Room Chatlogs(10 messages)</span></h2>
					<div style="padding: 5px" align="left">
					{chatlogs}
					</div>
				</div>
			</div>

			<div class="habblet-container ">
				<div class="cbb clearfix settings ">
					<h2 class="title"><span style="float: left;">Final Log - Messenger Chatlogs (10 messages)</span></h2>
					<div style="padding: 5px" align="left">
					{messenger}
					</div>
				</div>
			</div>
		</div>

		<div id="column2" class="column">

			<div class="habblet-container ">
				<div class="cbb clearfix green ">
					<h2 class="title"><span style="float: left;">Ban Appeals</span></h2>
					<div style="padding: 5px" align="left">
						To appeal your ban, please visit our forums, <a href="{url}/forums/index.php" target="_blank">here</a>. Please be sure to use the proper appeal format, and to also only appeal for yourself.
					</div>
				</div>
			</div>

			<div class="habblet-container ">
				<div class="cbb clearfix green ">
					<h2 class="title"><span style="float: left;">Account Stats</span></h2>
					<div style="padding: 5px" align="left">
					{info}
					</div>
				</div>
			</div>

			<div class="habblet-container ">
				<div class="cbb clearfix green ">
					<h2 class="title"><span style="float: left;">{hotelname} Time</span></h2>
					<div style="padding: 5px" align="left">
						{time}
					</div>
				</div>
			</div>

		</div>
<?php require_once ('extra/footer.php'); ?>
