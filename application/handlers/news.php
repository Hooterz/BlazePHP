<?php
    $id = explode('-', $this->template->getRouter()->getExtra(2))[0];

		if ($this->database->num_rows("SELECT null FROM `cms_news` WHERE `id` = ? AND `is_live` = '1' LIMIT 1", [$id]) == 0) {
			$id = $this->database->query("SELECT `id` FROM `cms_news` WHERE `is_live` = '1' ORDER BY `id` DESC LIMIT 1", [])->fetch(PDO::FETCH_OBJ)->id;
			$news = $this->database->query("SELECT * FROM `cms_news` WHERE `id` = ? AND `is_live` = '1' LIMIT 1", [$id])->fetch(PDO::FETCH_OBJ);
		} else {
			$news = $this->database->query("SELECT * FROM `cms_news` WHERE `id` = ? AND `is_live` = '1' LIMIT 1", [$id])->fetch(PDO::FETCH_OBJ);
		}

		$this->template->addTemplate('newsId', $id);
		$this->template->addTemplate('newsTitle', $news->title);
		$this->template->addTemplate('newsSlug', $news->title);
		$this->template->addTemplate('newsPromo', $news->image);
		$this->template->addTemplate('newsSummary', $news->shortstory);
		$this->template->addTemplate('newsContent', $news->longstory);
		$this->template->addTemplate('newsAuthor', $news->author);
		$this->template->addTemplate('newsDate', date("d-m-y", $news->published));


            $newslist = '';
            for($i = 0; $i < 7; $i++)
            {
              $sectionName = '';
              $sectionCutoffMax = 0;
              $sectionCutoffMin = 0;

              switch($i)
              {
                case 0:

                  $sectionName = 'Today';
                  $sectionCutoffMax = time();
                  $sectionCutoffMin = time() - 86400;
                  break;

                case 1:

                  $sectionName = 'Yesterday';
                  $sectionCutoffMax = time() - 86400;
                  $sectionCutoffMin = time() - 172800;
                  break;

                case 2:

                  $sectionName = 'This Week';
                  $sectionCutoffMax = time() - 172800;
                  $sectionCutoffMin = time() - 604800;
                  break;

                case 3:

                  $sectionName = 'Last Week';
                  $sectionCutoffMax = time() - 604800;
                  $sectionCutoffMin = time() - 1209600;
                  break;

                case 4:

                  $sectionName = 'This Month';
                  $sectionCutoffMax = time() - 1209600;
                  $sectionCutoffMin = time() - 2592000;
                  break;

                case 5:

                  $sectionName = 'Last Month';
                  $sectionCutoffMax = time() - 2592000;
                  $sectionCutoffMin = time() - 5184000;
                  break;

				 case 6:

                  $sectionName = 'All time';
                  $sectionCutoffMax = time() - 5184000;
                  $sectionCutoffMin = time() - 63072000;
				 break;
              }

              $q = "SELECT * FROM cms_news WHERE `is_live` = '1' AND published >= " . $sectionCutoffMin . " AND published <= " . $sectionCutoffMax .  " ORDER BY published DESC";
              $getArticles = $this->database->query($q, []);
              if($getArticles->rowCount() > 0)
              {
                $newslist .= '<h2>' . $sectionName . '</h2>
                <ul>';

				if(isset($id))
					$aId = explode('-', $id)[0];

                while($a = $getArticles->fetch(PDO::FETCH_OBJ))
                {

					if($a->id == $aId)
					{
						$newslist .= '<li>
							' . htmlspecialchars($a->title) . '
						</li>';
					}
					else
					{
						$newslist .= '<li>
							<a href="/news/' . $a->id . '-' . $a->title . '" class="article-' . $a->id . '">' . htmlspecialchars($a->title) . '&nbsp;&raquo;</a>
						</li>';
					}
                }

                $newslist .= '</ul>';
              }
            }
            $this->template->addTemplate('newslist', $newslist);

?>
