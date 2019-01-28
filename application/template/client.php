
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
			var flashvars = {
				"connection.info.host":"94.23.1.25",
				"connection.info.port":"804",
				"client.reload.url": "https://bliss.gg/clienterror",
				"client.fatal.error.url": "https://bliss.gg/clienterror",
				"client.connection.failed.url": "https://bliss.gg/clienterror",
				"logout.url": "https://bliss.gg/me",
				"logout.disconnect.url": "https://bliss.gg/me",
				"url.prefix":"https://bliss.gg",
				"client.starting":"Please wait! {hotelname} is starting up.",
				"has.identity":"1",
				"client.starting.revolving":"Time is an illusion. Loading time doubly so./All the relevant elves are on break. Please wait../It looks like you're waiting for a website to load../Plank from Ed, Edd. 'n' Eddy was my first cartoon crush./We won't piss about for too much longer./Spinning up the hamster../Programming the flux capacitor../Shovelling coal into the server..",
				"spaweb":"1",
				"client.notify.cross.domain":"1",
				"unique_habbo_id":"hhus-10",
				"client.allow.cross.domain":"1",
				"nux.lobbies.enabled":"false",
				"flash.client.origin":"popup",
				"sso.ticket":"bliss-373/77504abd32916659381f547449af26c7e",
				"account_id":"10",
				"productdata.load.url":"https://game.bliss.gg/gamedata/productdata.txt?1354274353",
				"furnidata.load.url":"https://game.bliss.gg/gamedata/furnidata.xml?1354274353",
				"external.texts.txt":"https://game.bliss.gg/gamedata/external_flash_texts.txt?1548577324",
				"external.variables.txt":"https://game.bliss.gg/gamedata/external_variables.txt?1548577324",
				"external.figurepartlist.txt":"https://game.bliss.gg/gamedata/figuredata.xml?1354274353",
				"external.override.texts.txt":"https://game.bliss.gg/gamedata/override/external_flash_override_texts.txt?1548577324",
				"external.override.variables.txt":"https://game.bliss.gg/gamedata/override/external_override_variables.txt?1548577324",
				"flash.client.url":"https://game.bliss.gg/gordon/PRODUCTION/",
				"processlog.enabled":"0"
			};

			window.FlashExternalInterface.disconnect = function() {
				window.location.href = "/clienterror";
			};

			window.FlashExternalInterface.logout = function() {
				window.location.href = "/logout";
			};

			var params = {
				"base" : "https://game.bliss.gg/gordon/PRODUCTION/",
				"allowScriptAccess" : "always",
				"menu" : "false",
				"wmode": "opaque"
			};

			swfobject.embedSWF('https://game.bliss.gg/Blissness.swf?1252304', 'client', '100%', '100%', '11.1.0', '//habboo-a.akamaihd.net/habboweb/63_1d5d8853040f30be0cc82355679bba7c/10404/web-gallery/flash/expressInstall.swf', flashvars, params, null, null);
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
