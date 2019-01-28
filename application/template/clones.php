<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>{hotelname} - Oh no!</title>

        <script type="text/javascript" src="{imagePath}/web-gallery/static/js/visual.js"></script>
        <script type="text/javascript" src="{imagePath}/web-gallery/static/js/common.js"></script>
        <link rel="stylesheet" href="{imagePath}/web-gallery/static/styles/common.css" type="text/css">
        <link rel="stylesheet" href="{imagePath}/web-gallery/static/styles/embedregistration.css" type="text/css">



        <script type="text/javascript">
            document.habboLoggedIn = true;
            var habboName = null;
            var habboId = null;
            var habboReqPath = "";
            var habboStaticFilePath = "{imagePath}";
            var habboImagerUrl = "http://www.habbo.com/habbo-imaging/";
            var habboPartner = "";
            var habboDefaultClientPopupUrl = "{url}/client";
            window.name = "habboMain";
            if (typeof HabboClient != "undefined") {
                HabboClient.windowName = "client";
                HabboClient.maximizeWindow = true;
            }
        </script>

        <style type="text/css">
            input[type="submit"], input[type="button"] {
                background: url('{imagePath}/web-gallery/v2/images/reg_btn.png') top;
                font: bold 13px arial,sans-serif;
                line-height: 25px;
                color: black;
                height: 25px;
                width: 99px;
                border: 0;
            }
            input[type="submit"]:hover, input[type="button"]:hover {
                background-position: bottom;
                cursor: pointer;
            }
        </style>

        <!--[if IE 8]>
            <link rel="stylesheet" href="{imagePath}/web-gallery/styles/ie8.css" type="text/css">
        <![endif]-->
        <!--[if lt IE 8]>
            <link rel="stylesheet" href="{imagePath}/web-gallery/styles/ie.css" type="text/css" />
        <![endif]-->
        <!--[if lt IE 7]>
            <link rel="stylesheet" href="{imagePath}/web-gallery/styles/ie6.css" type="text/css" />
            <script type="text/javascript" src="{imagePath}/web-gallery/js/pngfix.js"></script>
            <script type="text/javascript">
                try { document.execCommand('BackgroundImageCache', false, true); } catch(e) {}
            </script>
            <style type="text/css">
                body { behavior: url({imagePath}/web-gallery/js/csshover.htc); }
            </style>
        <![endif]-->

        <style>
        body {
        	background: url('{imagePath}/bg.png');
        }
        </style>

    </head>

    <body>

        <div id="overlay"></div>



        <div id="container" class="phase-0" style="margin-top: 10px;">
            <div class="register-container clearfix">
                <div class="register-header">Register at {hotelname} Hotel</div>
                <div id="register-content">
                    <div id="subheader"><img src="{imagePath}/logo1.png?"></img></div>
                    <div class="register-container-bottom-end register-content clearfix">
                        <div id="register-page" style="clear: left" class="phase-0 clearfix">
                            <div class="phase-0">
								<div style="padding: 5px;width:300px;">Hi there!<br/><br/>

								It seems that you already have two (or more) accounts on {hotelname} unfortunately we only allow two accounts per IP addresses maximum!<br/><br/>

								Thank you,<br/>
								{hotelname} Management.</div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="register-container-bottom"></div>
                <!--[if lt IE 7]>
                    <script type="text/javascript">
                        Pngfix.doPngImageFix();
                    </script>
                <![endif]-->
            </div>

        </div>
        <script type="text/javascript">
            HabboView.run();
        </script>

    </body>
</html>
