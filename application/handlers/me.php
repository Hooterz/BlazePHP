<?php
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
