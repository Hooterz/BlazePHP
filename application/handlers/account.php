<?php
if ($this->isBanned($this->user->username) || $this->isBanned($_SERVER['REMOTE_ADDR'])) {
		$this->Redirect('banned');
		die();
}

if(!empty($_POST['acc_old_password']) && !empty($_POST['acc_new_password'])){
  if(password_verify($_POST['acc_old_password'], $this->user->password))
				{
					if(strlen($_POST['acc_new_password']) >= 8)
					{
						$this->user->updateVar('password', $this->hash($_POST['acc_new_password']));
						$success = 'Password successfully updated!';
					}
					else
					{
						$error = 'New password is too short';
					}
				}
				else
				{
					$error = 'Current password is wrong!';
				}
}

if(isset($success)){
  $this->template->addTemplate('success', '<br><center><div class="rounded rounded-green">'.$success.'</div></center><br>');
}else{
  $this->template->addTemplate('success', null);
}
if(isset($error)){
  $this->template->addTemplate('error', '<br><center><div class="rounded rounded-red">'.$error.'</div></center><br>');
}else{
  $this->template->addTemplate('error', null);
}
?>
