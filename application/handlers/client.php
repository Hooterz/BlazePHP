<?php

if($this->config->maint && $this->user->rank < 4) {    
	header('Location: /me');
	die();
}

?>
