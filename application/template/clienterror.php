<!DOCTYPE html>
<html>
<head>
<title>{hotelname} - Client Error</title>
<link rel="shortcut icon" href="{imagePath}/web-gallery/v2/favicon.ico" type="image/vnd.microsoft.icon" />
<link rel="stylesheet" href="{imagePath}/css/client.css" type="text/css" />
<meta http-equiv="refresh" content="30;URL='/client'" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-76286809-8');
    </script>
</head>
<body>
<div id="client-disconnect-overlay" class="client-disconnect-overlay default-cursor not-selectable" unselectable="on">
<div class="client-landing-image client-landing-left"></div>
<div class="client-landing-image client-landing-right"></div>
<div class="client-disconnect-logo"></div>
<div class="spacer-tiny"></div>
<div class="client-disconnect-info centered">
<div class="disconnect-box black-outline rounded centered">
<div class="disconnect-text disconnect-text-massive">Disconnected!</div>
</div>
<div class="spacer"></div>
<a href="/client">
<button type="submit" id="disconnect-reload-button" class="disconnect-button button button-green uppercase rounded black-outline">
Reconnect
</button>
</a>
</div>
</div>
<script src="{imagePath}/web-gallery/client/js/jquery.timer.js" type="text/javascript"></script>
<script type="text/javascript">
        $(document).ready(function() {
            showAd();

            adTimer.play();
        });

        var i = 30;
        var timer = $.timer(function() {
            i = 30;
            showAd();
            adTimer.play();
        });

        timer.set({
            time: 1200000,
            autostart: true
        });

        var adClosing = $.timer(function() {
            closeAd();
            adClosing.stop();
        });

        adClosing.set({
            time: 30000,
            autostart: false
        });

        var adTimer = $.timer(function() {
            i--;
            $('#timer').html('This advert supports {hotelname}, however closing in <b>' + i + '</b> seconds!');
            if (i <= 0)
                adTimer.stop();
        });

        adTimer.set({
            time: 1000,
            autostart: false
        });

        function showAd() {
            $('#advert-container').fadeIn('slow');
            adClosing.play();
            timer.stop();
        }

        function closeAd() {
            $('#advert-container').fadeOut('slow');
            timer.play();
        }
    </script>
</body>
</html>
