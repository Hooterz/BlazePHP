<?php
if ($navigatorID == 1)
{
	if ($subNavigatorID == 1)
		echo '<li class="selected">Home</li>';
	else
		echo '<li class=""><a href="{url}/me">Home</a></li>';
		if ($subNavigatorID == 2)
			echo '<li class="selected last">Account Settings</li>';
		else
			echo '<li class="last"><a href="{url}/account">Account Settings</a></li>';
}

else if ($navigatorID == 2)
{
	if ($subNavigatorID == 1)
		echo '<li class="selected">Community</li>';
	else
		echo '<li class=" "><a href="{url}/community">Community</a></li>';

	if ($subNavigatorID == 2)
		echo '<li class="selected">News Articles</li>';
	else
		echo '<li class=""><a href="{url}/news">News Articles</a></li>';

		if ($subNavigatorID == 3)
			echo '<li class="selected">Staff</li>';
		else
			echo '<li class=""><a href="{url}/staff">Staff</a></li>';

		if ($subNavigatorID == 4)
			echo '<li class="selected last">Leaderboards</li>';
		else
			echo '<li class="last "><a href="{url}/leaderboard">Leaderboards</a></li>';
}
?>
