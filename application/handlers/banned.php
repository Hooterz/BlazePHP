<?php
$getBan = $this->database->query("SELECT * FROM `bans` WHERE `value` = ? OR `value` = ?", [$this->user->username,$_SERVER['REMOTE_ADDR']]);
if($getBan->rowCount() == 0)
{
	$this->Redirect('me');
	exit;
}

$getInfo = $getBan->fetch(PDO::FETCH_OBJ);
if(time() > $getInfo->expire)
{
	$this->database->query("INSERT INTO `bans_expired` SELECT * FROM `bans` WHERE `id` = ? AND `id` IN (SELECT `id` FROM `bans`);", [$getInfo->id]);
  $this->database->query("DELETE FROM `bans` WHERE `value` = ? OR `value` = ?", [$this->user->username, $_SERVER['REMOTE_ADDR']]) or die(mysql_error());
	$this->Redirect('me');
	exit;
}

$this->template->addTemplate('addedby', $getInfo->added_by);
$this->template->addTemplate('reason', $getInfo->reason);
$this->template->addTemplate('addeddate', date("dS \of F Y - h:ia (T)", $getInfo->added_date));
$this->template->addTemplate('expire', date("dS \of F Y - h:ia (T)", $getInfo->expire));

$logs = '';
$getLogs = $this->database->query("SELECT `message`,`timestamp` FROM `chatlogs` WHERE `user_id` = ? ORDER BY `id` DESC LIMIT 10", [$this->user->id]);
if ($getLogs->rowCount() > 0) {
  $logs .= '<table width="100%">

  <tr>
    <td><strong>Message</strong></td>
    <td><strong>Date</strong></td>
  </tr>';


  while ($log = $getLogs->fetch(PDO::FETCH_OBJ)) {
    $logs .= '<tr>';
    $logs .= '<td>'.$log->message.'</td>';
    $logs .= '<td>'.date('d-m-y H:i', $log->timestamp).'</td>';
    $logs .= '</tr>';
  }
  $logs .= '</table>';
} else {
  $logs .= 'Oops, no chatlog found.';
}
$this->template->addTemplate('chatlogs', $logs);

$messenger = '';
$getLogs = $this->database->query("SELECT `message`,`timestamp` FROM `chatlogs_console` WHERE `from_id` = ? ORDER BY `id` DESC LIMIT 10", [$this->user->id]);
if ($getLogs->rowCount() > 0) {
  $messenger .= '<table width="100%">

  <tr>
    <td><strong>Message</strong></td>
    <td><strong>Date</strong></td>
  </tr>';


  while ($log = $getLogs->fetch(PDO::FETCH_OBJ)) {
    $messenger .= '<tr>';
    $messenger .= '<td>'.$log->message.'</td>';
    $messenger .= '<td>'.date('d-m-y H:i', $log->timestamp).'</td>';
    $messenger .= '</tr>';
  }
  $messenger .= '</table>';
} else {
  $messenger .= 'Oops, no chatlog found.';
}
$this->template->addTemplate('messenger', $messenger);

$ass = '';
$getInfo = $this->database->query("SELECT * FROM `user_info` WHERE `user_id` = ? LIMIT 1", [$this->user->id]);
if ($getInfo->rowCount() > 0) {

  $info = $getInfo->fetch(PDO::FETCH_OBJ);

  $ass .= '
  <strong>Bans:</strong> '.$info->bans.'<br/>
  <strong>Cautions:</strong> '.$info->cautions.'<br/>
  <strong>CFHs Sent:</strong> '.$info->cfhs.'<br/>
  <strong>Abusive CFHs:</strong> '.$info->cfhs_abusive.'<br/>
  <strong>Times Trading Locked:</strong> '.$info->trading_locks_count.'<br/>';
} else {
  $ass .= 'Oops, no chatlog found.';
}
$this->template->addTemplate('info', $ass);

$time = '';
$time .= date("dS \of F Y - h:ia (T)", time());
$this->template->addTemplate('time', $time);
 ?>
