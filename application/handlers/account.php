<?php
if(isset($_POST['acc_motto'])){
  if(strlen($_POST['acc_motto']) > 30){
    $error = 'Motto cant be longer than 30 characters!';
  } else {
    $this->user->updateVar('motto', $_POST['acc_motto']);
    $this->template->addTemplate('motto', $_POST['acc_motto']);
    $success = 'Motto successfully updated!';
  }
}

if(isset($_POST['acc_email'])){
  if($this->user->validEmail($_POST['acc_email'])){
    $this->user->updateVar('mail', $_POST['acc_email']);
    $this->template->addTemplate('email', $_POST['acc_email']);
    $success = 'Email successfully updated!';
  } else {
    $error = 'Invalid email!';
  }
}

if(!empty($_POST['acc_old_password']) && !empty($_POST['acc_new_password'])){
  if($this->user->password == $this->hash($_POST['acc_old_password']))
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
