<?php

if ($this->isBanned($this->user->username) || $this->isBanned($_SERVER['REMOTE_ADDR'])) {
		$this->Redirect('banned');
		die();
}

if($this->config->maint && $this->user->rank < 4) {
	$this->Redirect('me');
	die();
}

?>
