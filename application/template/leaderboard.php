<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>{hotelname} - Top Players</title>

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
		HabboClient.windowName = "ac96433fa782a85a4d9d1724e256d10df092be19";
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
$navigatorID = 2;
require_once ('extra/header.php');

?>


<div id="content-container">

<div id="navi2-container" class="pngbg">
    <div id="navi2" class="pngbg clearfix">
		<ul>
		<?php

		$subNavigatorID = 4;
		require_once ('extra/sub_header.php');

		?>
		</ul>
    </div>
</div>
<style>
hr {
border-top:1px solid #e3e3db;
border-left:none;
border-bottom:none;
bottom-right:none;
width:90%;
}
</style>
<div id="container">
	<div id="content" style="position: relative" class="clearfix">
		<div id="column" class="column" style="width:192px;">
			<div class="habblet-container ">
				<div class="cbb clearfix orange ">
					<h2 class="title"><span style="float: left;">Most Credits</span></h2>
					<div align='left'>

						{topcredits}

					</div>
				</div>
			</div>
		</div>

		<div id="column" class="column" style="width:192px;">
			<div class="habblet-container ">
				<div class="cbb clearfix blue ">
					<h2 class="title"><span style="float: left;">Most Duckets</span></h2>
					<div align='left'>

						{topduckets}

					</div>
				</div>
			</div>
		</div>

		<div id="column" class="column" style="width:192px;">
			<div class="habblet-container ">
				<div class="cbb clearfix brown ">
					<h2 class="title"><span style="float: left;">Most Diamonds</span></h2>
					<div align='left'>

            {topdiamonds}

					</div>
				</div>
			</div>
		</div>

		<div id="column" class="column" style="width:192px;">
			<div class="habblet-container ">
				<div class="cbb clearfix green ">
					<h2 class="title"><span style="float: left;">Most Respected</span></h2>
					<div align='left'>

             {toprespects}

					</div>
				</div>
			</div>
		</div>


<?php require_once ('extra/footer.php'); ?>
