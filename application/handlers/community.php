<?php
if ($this->isBanned($this->user->username) || $this->isBanned($_SERVER['REMOTE_ADDR'])) {
		$this->Redirect('banned');
		die();
}

$newsItem = 0;
$html = '';
$data = $this->database->query("SELECT `id`,`title`, `image`, `shortstory`, `longstory` FROM `cms_news` WHERE  `is_live` = '1' ORDER BY `id` DESC LIMIT 18", []);
while($newsData = $data->fetch(PDO::FETCH_OBJ))
{
$newsItem++;
if ($newsItem != 1){
$itemsStuffs = '; display: none;';
}else{ $itemsStuffs = ''; }

$html .= '
<div class="promo-container" style="background-image: url('.$this->config->imagePath.'/web_promo/'.$newsData->image.')'.$itemsStuffs.'">
<div class="promo-content-container">
<div class="promo-content">
 <div class="title">'.$newsData->title.'</div>
 <div class="body">'.$newsData->shortstory.'</div>
</div>
</div>
<div class="promo-link-container">
<div class="enter-hotel-btn">
 <div class="open enter-btn">
   <a style="padding: 0 8px 0 19px;" href="'.$this->config->url.'/news/' . $newsData->id . '-' . $newsData->title . '">Read more &raquo;</a><b></b>
 </div>
</div>
</div>
</div>';
}
$this->template->addTemplate('news', $html);

 $rooms = '';
 $GetRooms = $this->database->query("SELECT `users_now`,`caption` FROM `rooms` ORDER BY `users_now` DESC LIMIT 10", []);
 $odd = false;
 while ($Room = $GetRooms->fetch(PDO::FETCH_OBJ)) {
    if($odd) {
		$colour = "odd";
		$odd = false;
	} else {
		$colour = "even";
		$odd = true;
	}
	$rooms .= "<div class=\"navi-box ".$colour."\">
	<div class=\"users-now\" style=\"background-color: #62b061;\"><font class=\"users-number\"><center><b>" .$Room->users_now . "</b></center></font></div>
	<div class=\"room-name\">" .$Room->caption . "</div>
	</div>";
	}
  $this->template->addTemplate('hotrooms', $rooms);

$groups = '';
							$roomCount = 0;
							$getTopGroup = $this->database->query("SELECT COUNT(*), groups.id, groups.name, groups.badge FROM group_memberships INNER JOIN groups ON groups.id = group_id GROUP BY group_id ORDER BY COUNT(*) DESC LIMIT 3", []);
							if ($getTopGroup->rowCount() > 0) {
								while ($group = $getTopGroup->fetch(PDO::FETCH_OBJ)) {

						$groups .=	"<img style='margin-top:10px; margin-left: 4px;margin-right:5px; float:left;' src='".$this->config->url."/swfs/habbo-imaging/badge/".$group->badge."'>
							<div class='staffBox' style='height:60px'>
								<table style='margin-left: 35px; padding-top: 6px;'>
									<tr style='padding: 0;'>
										<td>
										<a href='#'>
										" . $group->name . "
										</a><br />
										" . number_format($getTopGroup->rowCount()) . " Members<br />

										</td>
									</tr>
								</table>
								<br /><br />
							</div>";
						 $roomCount++;
				if($roomCount != 6)
					$groups .= "<hr>";} } else { $groups .= "Oops, we could not find the top group!"; }
          $this->template->addTemplate('topgroups', $groups);

?>
