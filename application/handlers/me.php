<?php
if ($this->isBanned($this->user->username) || $this->isBanned($_SERVER['REMOTE_ADDR'])) {
		header("Location: /banned");
		die();
}

$maint = '';
if(!$this->config->maint)
  {
		 $maint = '<div class="enter-hotel-btn">
     <div class="open enter-btn" style="padding-top: -10px;">
     <a href="/client" target="26530fff566f9e67da99560b7fe8da6d71d46391" onclick="HabboClient.openOrFocus(this); return false;">Enter '.$this->config->hotelname.' Hotel<i></i></a>
     <b></b>
     </div>';
  } else {
		$maint = '<div class="enter-hotel-btn">
    <div class="closed enter-btn">
    <span>'.$this->config->hotelname.' is offline.</span>
    <b></b>
    </div>';
  }
$this->template->addTemplate('enterhotel', $maint);

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
<div class="promo-container" style="background-image: url('.$this->config->imagePath.'/web_promos/'.$newsData->image.')'.$itemsStuffs.'">
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
?>
