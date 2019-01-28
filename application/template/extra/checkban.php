<?php
if ($this->isBanned(($_SESSION['userid']['username']) || $this->isBanned($_SERVER['REMOTE_ADDR']))) {
		$this->Redirect('banned');
		die();
}
?>
