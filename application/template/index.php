<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="https://www.facebook.com/2008/fbml">
	<head>
		<meta charset="utf-8">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta http-equiv="Cache-control" content="public">
		<link rel="author" href="{url}/" />

		<title>{hotelname} - Virtual World, Avatar Chat and Pixel Art!</title>

		<meta name="description" content="{meta_description}" />
		<meta name="keywords" content="{meta_keywords}" />

		<meta property="og:url" content="{url}/index">
		<meta property="og:type" content="website">
		<meta property="og:description" content="{meta_description}">
		<meta property="og:title" content="{hotelname} - Virtual World, Avatar Chat and Pixel Art!">
		<meta property="og:site_name" content="{hotelname} Hotel">
		<meta property="og:image" content="{imagePath}/app_summary_image-1200x628.85a9f5dc.png">
		<meta property="og:image:height" content="628">
		<meta property="og:image:width" content="1200">

		<meta itemprop="name" content="{hotelname}">
		<meta itemprop="description" content="Check into one of the world\'s largest virtual retro hotels for FREE! Meet and make friends, play games, chat with others, create your avatar, design rooms and more...">
		<meta itemprop="image" content="{imagePath}/app_summary_image-1200x628.85a9f5dc.png">

		<meta name="twitter:card" content="summary" />
		<meta name="twitter:site" content="@boonltd" />
		<meta name="twitter:title" content="{hotelname} - Virtual World, Avatar Chat and Pixel Art!">
		<meta name="twitter:description" content="{meta_description}">
		<meta name="twitter:image" content="{imagePath}/app_summary_image-1200x628.85a9f5dc.png">

		<link rel="dns-prefetch" href="//fonts.googleapis.com">
		<link rel="dns-prefetch" href="//fonts.gstatic.com">

		<link rel="shortcut icon" href="{imagePath}/web-gallery/v2/favicon.ico" type="image/vnd.microsoft.icon">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu:400,700,400italic,700italic|Ubuntu+Condensed">
		<link rel="stylesheet" href="{imagePath}/web-gallery/static/styles/v3_landing.css" type="text/css" />

		<script>
		var andSoItBegins = (new Date()).getTime();
		var habboPageInitQueue = [];
		var habboStaticFilePath = "{url}/web-gallery";
		</script>


		<script src="{imagePath}/web-gallery/static/js/v3_landing_top.js" type="text/javascript"></script>

		<style type="text/css">
		header #habbo-logo {
			margin-top: -5px;
      width: 144px;
      height: 40px;
			background-image: url('{imagePath}/logo1.png');
		}
		</style>

	</head>

<body class=""  >
<div id="overlay"></div>


<header>


    <div id="border-left"></div>
    <div id="border-right"></div>


{error}

<div id="login-form-container">
    <a href="#home" id="habbo-logo"></a>

    <form action="#" method="post">

    <div id="login-columns">
        <div id="login-column-1">
            <label for="credentials-email">Username</label>
            <input tabindex="2" type="text" name="username" id="credentials-email">
			<input tabindex="5" type="checkbox" name="_login_remember_me" id="credentials-remember-me">
            <label for="credentials-remember-me" class="sub-label">Keep me logged in</label>

        </div>

        <div id="login-column-2">
            <label for="credentials-password">Password</label>
            <input tabindex="3" type="password" name="password" id="credentials-password">
			 <a href="" target="_blank" id="forgot-password" class="sub-label">Forgot your password?</a>
        </div>

        <div id="login-column-3">
            <input type="submit" value="Login" name="login" style="margin: -10000px; position: absolute;">
            <a href="#" tabindex="4" class="button" id="credentials-submit"><b></b><span>Login</span></a>
        </div>

		<div id="login-column-4">
			<div id="fb-root"></div>
			<font style="font-size:15.3px;"><b>{online}</b> {hotelname}(s) online!</font>
		</div>
       </div>
    </div>
</form>
</div>

<script>
    habboPageInitQueue.push(function() {
        if (!LandingPage.focusForced) {
            LandingPage.fieldFocus('credentials-email');
        }
    });
</script>
    <div id="alerts">
<noscript>
<div id="alert-javascript-container">
    <div id="alert-javascript-title">
        Missing JavaScript support
    </div>
    <div id="alert-javascript-text">
        Javascript is disabled on your browser. Please enable JavaScript or upgrade to a Javascript-capable browser to use {hotelname} :)
    </div>
</div>
</noscript>

<div id="alert-cookies-container" style="display:none">
    <div id="alert-cookies-title">
        Missing cookie support
    </div>
    <div id="alert-cookies-text">
        Cookies are disabled on your browser. Please enable cookies to use {hotelname}.
    </div>
</div>
<script type="text/javascript">
    document.cookie = "habbotestcookie=supported";
    var cookiesEnabled = document.cookie.indexOf("habbotestcookie") != -1;
    if (cookiesEnabled) {
        var date = new Date();
        date.setTime(date.getTime()-24*60*60*1000);
        document.cookie="habbotestcookie=supported; expires="+date.toGMTString();
    } else {
        if (window.habboPageInitQueue) {
            // jquery might not be loaded yet
            habboPageInitQueue.push(function() {
                $('#alert-cookies-container').show();
            });
        } else {
            $('alert-cookies-container').show();
        }
    }
</script>
    </div>
    <div id="top-bar-triangle"></div>
    <div id="top-bar-triangle-border"></div>
</header>


<div id="content">
    <ul>
        <li id="home-anchor" class="home-anchor-day" >
                        <div id="welcome">
                                <a href="#registration" class="button large" id="join-now-button"><b></b><span>JOIN NOW!</span><span class="sub">Get free credits.</span></a>
                                <div id="slogan">
									<h1>Welcome to {hotelname},</h1>
									<p>a strange place with awesome people.</p>
									<p><a id="tell-me-more-link" href="#">Tell me more...</a></p>
                                </div>
                        </div>

            <div id="carousel">
                <div id="image1"></div>
                <div id="image2"></div>
                <div id="image3"></div>

                <!--div id="image1" ></div>
                <div id="image2" ></div>
                <div id="image3" ></div-->
                <div id="tell-me-more">{hotelname} is a virtual world where you can create your very own {hotelname} character and design your room the way you like. You'll meet new friends, chat, organize parties, look after virtual pets, create and play games and complete quests.<br /><br />Click 'Join Now' to get started!</div>
            </div>

            <div id="floaters "></div>
        </li>

        <li id="registration-anchor" >

<div id="registration-form">
    <div id="registration-form-header">
        <h2>User ID</h2>
        <p>Fill in these details to begin:</p>
    </div>
    <div id="registration-form-main">
        <form id="register-new-user" autocomplete="off">
        <input type="hidden" name="next" value="">
        <div id="registration-form-main-left">
                        <span>
                                <label for="registration-username">Username</label>
                                <label for="registration-username" class="details">You'll need this <b>username</b> to login to {hotelname} with!</label>
                                <input type="text" name="registrationBean.username" id="registration-username" value="">
                        </span>

                        <span>
                                <label for="registration-email">Email</label>
                                <label for="registration-email" class="details">You'll need this <b>email address for future reference</b>. Please use a valid address.</label>
                                <input type="email" name="registrationBean.email" id="registration-email" value="">
                        </span>

        </div>

        <div id="registration-form-main-right">
                        <span id="password-field-container">
                <label for="registration-password">Password</label>
                <label for="registration-password" class="details">Password must be at least <b>6 characters </b>long and include <b>letters and numbers</b></label>
                <input type="password" name="registrationBean.password" id="registration-password" maxlength="32" value="">
            </span>

            <span id="password-field-container">
                <label for="registration-password-confirm">Password Confirmation</label>
                <label for="registration-password-confirm" class="details">Just to be safe, please enter your chosen password again!</label>
                <input type="password" name="registrationBean.password.confirm" id="registration-password-confirm" maxlength="32" value="">

            </span>

            <p class="checkbox-container" id="registration-tos">
                <input type="checkbox" id="tos" name="registrationBean.termsOfServiceSelection" value="true">
                <label for="tos" class="details checkbox">
                                        I accept the <a href="#">Terms Of Service</a>.
                </label>
            </p>

            <div class="submit-button-wrapper">
                <a href="#" class="button large not-so-large register-submit"><b></b><span>Done</span></a>
            </div>
        </div>
        </form>
    </div>
</div>
            <div id="sail"></div>
            <div id="baggage" ></div>
        </li>
    </ul>

</div>

<footer>


    <div id="footer-content" class="partner-logo-present">
      <div id="footer"><a href='{url}'>{hotelname}</a><!-- / <a href='{url}/report'>Contact Us</a></div>-->
        <div id="copyright"><p class="copyright">{hotelname} © <?php echo date('Y', time()); ?>. All rights reserved. {hotelname} is no way affiliated with Sulake Corporation Oy.</div>
	</div>

</footer>



<script src="{imagePath}/web-gallery/static/js/v3_landing_bottom.js" type="text/javascript"></script>
<!--[if IE]><script src="{imagePath}/web-gallery/static/js/v3_ie_fixes.js" type="text/javascript"></script>
<![endif]-->

</body>
</html>
