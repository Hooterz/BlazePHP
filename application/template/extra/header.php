<style>
.login-error {
	width:100%;
	text-align:center;
	height:34px;
	line-height:34px;
	background:rgba(255,0,0,.6);
	top:0;
	color:#fff;
	font-weight:bold;
	font-size:16px;
}
body {
	background: url('{imagePath}/bg.png');
}

#header h1 a, #header h1 span {
  width: 144px;
    height: 42px;
	background-image: url('{imagePath}/logo1.png?');
}

#header-container {
    background-repeat: repeat-x;
    background-image: url('{imagePath}/topbg2.png');
    background-position: 0 100%;
    min-width: 970px;
    margin: 0;
    z-index: 10;
}
#wide-personal-info {
	background: url('{imagePath}/mepage_info_bg_habbeh.png');
	height: 123px;
	margin-bottom: 5px;
}

hr {
    border: 0;
    border-bottom: 1px dashed #ccc;
    background: #999;
}

#navi li strong,#navi li a{float:left;height:22px;padding:6px 16px 0 22px;background-repeat:no-repeat;background-image:url('{imagePath}/tags_blue.png');background-position:-10px -28px;color:#FFFFFF;font-weight:normal;text-decoration:none;max-width:290px;overflow:hidden;text-overflow:ellipsis;}
#navi li span{float:left;height:28px;width:6px;background-repeat:no-repeat;background-image:url('{imagePath}/tags_blue.png');background-position:-4px -28px;}
#navi li.selected strong,#navi li.selected a{background-position:-10px 0;color:#000000;font-weight:bold;}#navi li.selected span{background-position:-4px 0;}
#navi li:hover strong,#navi li:hover a{background-position:-10px -56px;}#navi li:hover span{background-position:-4px -56px;}
#navi li.selected:hover strong,#navi li.selected:hover a{background-position:-10px 0;}
#navi li.selected:hover span{background-position:-4px 0;#navi .viptab2 a { font-weight:bold;background-image:url('{imagePath}/tags_blue.png');background-position:-10px -84px;}

</style>

<div id="header-container">
	<div id="header" class="clearfix">
		<h1><a href="{url}"></a> </h1>



  <div id="subnavi" class="narrow">
		<div id="subnavi-search">
				<div id="subnavi-search-upper">
				<ul id="subnavi-search-links">

				<li>
					<form action="/logout" method="post">
						<button type="submit" id="signout" class="link"><span style="font-size: 10px;">Sign Out</span></button>
					</form>
				</li>


				</ul>
			</div>
		</div>


		</div>

		<ul id="navi">
		<?php
		if ($navigatorID == 1)
			echo '<li class="metab selected"><strong>{username}</strong><span></span></li>';
		else if (isset($_SESSION['userid']))
			echo '<li class=""><a href="{url}/me">{username}</a><span></span></li>';

			if ($navigatorID == 2)
				echo '<li class="selected"><strong>Community</strong><span></span></li>';
			else
				echo '<li class=""><a href="{url}/community">Community</a><span></span></li>';
		 ?>

		</ul>


		 <div id="habbos-online">
				<div id="content">
				<div class="cbb ">
					<span><b>{online}</b><br> member(s) online</span>
				</div>
			</div>
		</div>
		</div></div>
	</div>
</div>
<style>.disable-block{height:120px;background-image:url('{imagePath}/disable-block.png');text-decoration:none!important;background-color:darkred;width:761px;-webkit-border-radius:2px;-moz-border-radius:4px;border-radius:4px;box-shadow:0 0 0 3px rgba(0,0,0,0.09),inset 0 0 0 2px rgb(244,244,244);background-position:right;width:-100px;margin-bottom:10px}.disable-block-title{font-family:'Ubuntu';font-weight:500;color:#fff;margin:0;font-size:24px;text-shadow:0 2px rgba(0,0,0,0.32);position:absolute;margin-top:15px;margin-left:20px}.disable-block-desc{font-family:'Ubuntu';color:#fff;margin:0;font-size:16px;text-shadow:0 2px rgba(0,0,0,0.32);position:absolute;margin-top:50px;margin-left:20px;text-align:left;width:710px}</style>
