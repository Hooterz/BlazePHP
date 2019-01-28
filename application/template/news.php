<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta http-equiv="Cache-control" content="public">
		<link rel="author" href="{url}/" />

		<title>{hotelname} - {newsTitle}!</title>

		<meta name="description" content="{meta_description}" />
		<meta name="keywords" content="{meta_keywords}" />

		<meta property="og:url" content="{url}/news/{newsId}">
		<meta property="og:type" content="website">
		<meta property="og:description" content="{newsSummary}">
		<meta property="og:title" content="{hotelname} - {newsTitle}!">
		<meta property="og:site_name" content="Habbeh Hotel">
		<meta property="og:image" content="{imagePath}/web_promos/{newsPromo}">
		<meta property="og:image:height" content="628">
		<meta property="og:image:width" content="1200">

		<meta itemprop="name" content="{hotelname} - {newsTitle}!">
		<meta itemprop="description" content="{newsSummary}">
		<meta itemprop="image" content="{imagePath}/app_summary_image-1200x628.85a9f5dc.png">

		<meta name="twitter:card" content="{meta_description}">
		<meta name="twitter:url" content="{url}/news/{newsId}">
		<meta name="twitter:title" content="{hotelname} - {newsTitle}!">
		<meta name="twitter:description" content="{newsSummary}">
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

	<style type="text/css">
	input[type="text"], input[type="password"] {
		background-color: #F1F1F1;
		border: 1px solid #999999;
		width: 175px;
		padding: 5px;
		font-family: verdana;
		font-size: 10px;
		color: #666666;
	}

	input[type="submit"] {
		background-color: #F1F1F1;
		border: 1px solid #999999;
		padding: 5px;
		font-family: verdana;
		font-size: 10px;
		color: #666666;
	}

	textarea {
		background-color: #F1F1F1;
		border: 1px solid #999999;
		padding: 5px;
		width: 517px;
		height: 70px;
		font-family: verdana;
		font-size: 10px;
		color: #666666;
	}

	select {
		background-color: #F1F1F1;
		border: 1px solid #999999;
		padding: 5px;
		font-family: verdana;
		font-size: 10px;
		color: #666666;
	}
	</style>

</head>
<body id="news" class=" ">
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

		$subNavigatorID = 2;
		require_once ('extra/sub_header.php');

		?>
		</ul>
    </div>
</div>

<div id="container">
	<div id="content" style="position: relative" class="clearfix">
		<div id="column1" class="column">


			<div class="habblet-container ">
				<div class="cbb clearfix default ">
					<h2 class="title">News</h2>
          <div id="article-archive">

              {newslist}

          </div>
				</div>
			</div>
			<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>
		</div>

		<div id="column2" class="column">
			<div class="habblet-container ">
				<div class="cbb clearfix notitle ">
					<div id="article-wrapper">
						<h2>{newsTitle}</h2>
						<div class="article-meta">{newsDate}</div>
						<p class="summary">{newsSummary}</p>

						<div class="article-body">
							<p>{newsContent}</p>
					<div class="article-meta">
					</div>
						</div>
					</div>
				</div>
			</div>

<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>


		</div>

<?php require_once ('extra/footer.php'); ?>
