<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>{hotelname} - Account Settings</title>

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
		HabboClient.windowName = "26530fff566f9e67da99560b7fe8da6d71d46391";
		HabboClient.maximizeWindow = true;
	}
	</script>

	<meta name="description" content="{meta_description}" />
	<meta name="keywords" content="{meta_keywords}" />

	<link rel="stylesheet" href="{imagePath}/web-gallery/static/styles/settings.css" type="text/css" />

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

$navigatorID = 1;
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
		<div class="content">
			<div class="habblet-container" style="float:left; width:210px;">
				<div class="cbb settings">
					<h2 class="title">Account Settings</h2>
					<div class="box-content">
						<div id="settingsNavigation">
							<ul>
									<li class="selected">My Settings</li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div class="habblet-container " style="float:left; width: 560px;">
				<div class="cbb clearfix settings">
					<h2 class="title">Information</h2>
					<div class="box-content">
							<form method="post" id="profileForm">
                {success}{error}
                <h3>Current Password</h3>
								<p>Your current password is the password you use now.</p>
								<p><label>Password:<input type="password" name="acc_old_password" value="" id="avatarmotto"></p>
								<h3>New Password</h3>
								<p>Please only change this field if you wish to change your login password.</p>
								<p><label>New Password:<input type="password" name="acc_new_password" value="" id="avatarmotto"></p>
								<div class="settings-buttons">
									<input type="submit" value="Save Changes" name="account" class="submit" style="float:right">
								</div>
							</form>
					</div>
				</div>
			</div>
		</div>


<?php require_once ('extra/footer.php'); ?>
