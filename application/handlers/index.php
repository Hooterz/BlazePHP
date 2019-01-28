<?php
if($this->user !== null){
  $this->Redirect('me');
}
if(isset($_POST['username']) && isset($_POST['password'])){
  $result = $this->Login($_POST['username'], $_POST['password']);
  if($result){
    $this->Redirect('me');
    exit;
  }else{
    $error = 'Username or password is incorrect!';
  }
}

if(isset($error)){
  $this->template->addTemplate('error', '<div id="login-errors">'.$error.'</div>');
}else{
  $this->template->addTemplate('error', null);
}
?>
