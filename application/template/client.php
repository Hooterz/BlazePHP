
<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>{hotelname} - Client</title>
		<link rel="shortcut icon" href="{imagePath}/web-gallery/v2/favicon.ico" type="image/vnd.microsoft.icon" />
		<link rel="stylesheet" href="{imagePath}/css/client.css?1548114363" type="text/css" />
		<script type="text/javascript" src="{imagePath}/js/swfobject.js"></script>
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script type="text/javascript" src="{imagePath}/js/habboapi.js"></script>
		<script type="text/javascript">
    var BaseUrl = "{url}/swfs/gordon/PRODUCTION-201701242205-837386173/";

		var flashvars =
					{
							"client.allow.cross.domain" : "1",
							"client.notify.cross.domain" : "0",
							"connection.info.host" : "ddosguard.xabbo.me",
							"connection.info.port" : "1232",
							"site.url" : "{url}",
							"url.prefix" : "{url}",
							"client.reload.url" : "{url}/clienterror",
							"client.fatal.error.url" : "{url}/clienterror",
							"client.connection.failed.url" : "{url}/clienterror",
							"external.variables.txt" : "{url}/swfs/gamedata/external_variables.txt",
							"external.texts.txt" : "{url}/swfs/gamedata/external_flash_texts.txt",
							"external.override.texts.txt" : "{url}/swfs/gamedata/override/external_flash_override_texts.txt",
							"external.override.variables.txt" : "{url}/swfs/gamedata/override/external_override_variables.txt",
							"external.figurepartlist.txt" : "{url}/swfs/gamedata/figuredata.xml",
							"productdata.load.url" : "{url}/swfs/gamedata/productdata.txt",
							"furnidata.load.url" : "{url}/swfs/gamedata/furnidata.xml",
							"use.sso.ticket" : "1",
							"sso.ticket" : "{sso}",
							"client.starting" : "Please wait! {hotelName} is starting up.",
							"processlog.enabled" : "0",
							"flash.client.url" : BaseUrl,
							"client.starting.revolving" : "For science, you monster/Loading funny message... please wait./Would you like fries with that?/Follow the yellow duck./Time is just an illusion./Are we there yet?!/I like your t-shirt./Look left. Look right. Blink twice. Ta da!/It\'s not you, it\'s me./Shhh! I\'m trying to think here./Loading pixel universe.",
							"flash.client.origin" : "popup"
					};

			window.FlashExternalInterface.disconnect = function() {
				window.location.href = "/clienterror";
			};

			window.FlashExternalInterface.logout = function() {
				window.location.href = "/logout";
			};

			var params =
            {
                "base" : BaseUrl + "/",
                "allowScriptAccess" : "always",
                "menu" : "false"                
            };

			swfobject.embedSWF(BaseUrl + "/Habbo.swf?123213", "client", "100%", "100%", "10.0.0", "{url}/swfs/gordon/PRODUCTION-201701242205-837386173/expressInstall.swf", flashvars, params, null);
		</script>
	<body>
		<div id="client">
			<habbo-client-error>
				<div class="client-error__background-frank">
					<div class="client-error__text-contents">
						<h1 class="client-error__title">You're nearly in {hotelname}!</h1>
						<p>Click the yellow Hotel button below, then click 'run Flash' when prompted to. See you in the Hotel!</p>
					</div>
					<div class="client-error__hotel-button-div">
						<a href="https://www.adobe.com/go/getflashplayer" target="_blank" rel="noopener noreferrer" class="hotel-button">
							<span class="hotel-button__text">Hotel</span>
						</a>
					</div>
				</div>
			</habbo-client-error>
		</div>
	</body>
</html>
