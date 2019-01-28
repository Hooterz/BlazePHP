<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>{hotelname} - Home</title>
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
        <link rel="stylesheet" href="{imagePath}/web-gallery/habboon/store/bootstrap.alerts.css" type="text/css" />
        <script type="text/javascript">
            document.habboLoggedIn = true;
            var habboName = "{username}";
            var habboId = {userid};
            var facebookUser = false;
            var habboReqPath = "";
            var habboStaticFilePath = "{url}/web-gallery";
            var habboImagerUrl = "http://www.habbo.com/habbo-imaging/";
            var habboPartner = "";
            var habboDefaultClientPopupUrl = "http://www.habbo.com/client";
            window.name = "habboMain";
            if (typeof HabboClient != "undefined") {
                HabboClient.windowName = "d7c6982e6ffb3a7298ef1cb1ff93d3e4f285b4ae";
                HabboClient.maximizeWindow = true;
            }
        </script>

        <link rel="stylesheet" href="{imagePath}/web-gallery/static/styles/lightweightmepage.css?" type="text/css" />
        <script src="{imagePath}/web-gallery/static/js/lightweightmepage.js" type="text/javascript"></script>
        <meta name="description" content="Check into the world's largest virtual hotel for FREE! Meet and make friends, play games, chat with others, create your avatar, design rooms and more..." />
        <meta name="keywords" content="habbo hotel, virtual, world, social network, free, community, avatar, chat, online, teen, roleplaying, join, social, groups, forums, safe, play, games, online, friends, teens, rares, rare furni, collecting, create, collect, connect, furni, furniture, pets, room design, sharing, expression, badges, hangout, music, celebrity, celebrity visits, celebrities, mmo, mmorpg, massively multiplayer" />
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
        <meta name="build" content="63-BUILD3538 - 06.01.2015 11:24 - com" />

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

		$subNavigatorID = 1;
		require_once ('extra/sub_header.php');

		?>
					</ul>
				</div>
			</div>

            <div id="container">
                  <div id="content" style="position: relative" class="clearfix">

            <div style="margin-top:5px;margin-bottom:5px;margin-left:20px;" >
            				</div>

            				<div id="wide-personal-info">
                                    <div id="habbo-plate">
                                        <a href="#">
            								<img style="-webkit-filter: drop-shadow(0 1px 0 #FFFFFF) drop-shadow(0 -1px 0 #FFFFFF) drop-shadow(1px 0 0 #FFFFFF) drop-shadow(-1px 0 0 #FFFFFF);" alt="{username}" src="{habboImagerPath}figure={figure}"/>
                                        </a>
                                    </div>

            						<div id="name-box" class="info-box">
            							<div class="label">Name:</div>
            							<div class="content">{username}</div>
            						</div>
            						<div id="motto-box" class="info-box">
            							<div class="label">Motto:</div>
            							<div class="content">{motto}</div>
            						</div>
            						<div id="last-logged-in-box" class="info-box">
            							<div class="label">Last signed in:</div>
            							<div class="content">{lastSignedIn}</div>
            						</div>

                      {enterhotel}

                                    </div>
                                </div>
                                <div id="promo-box">
                        <div id="promo-bullets"></div>
					          	 {news}
                    </div>
                    <script type="text/javascript">
                        document.observe("dom:loaded", function() { PromoSlideShow.init(); });
                    </script>

                  
       <script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>

                    <?php require_once ('extra/footer.php'); ?>
