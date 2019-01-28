<?php
if ($this->isBanned($this->user->username) || $this->isBanned($_SERVER['REMOTE_ADDR'])) {
		header("Location: /banned");
		die();
}

$staff = '';
$getRanks = $this->database->query("SELECT `id`,`name`,`title`,`badgeid`,`tab_colour` FROM `ranks` WHERE `id` > 1 AND `hidden` = '0' ORDER BY id DESC", []);
while ($Ranks = $getRanks->fetch(PDO::FETCH_OBJ))
{
  $staff .= '
  <div class="habblet-container ">
  <div class="cbb clearfix ' . $Ranks->tab_colour . ' ">
  <h2 class="title"><span style="float: left;">' . $Ranks->name . '</span> <span style="float: right; font-weight: normal; font-size: 75%;">' . $Ranks->title . '</span></h2>';

  $getMembers = $this->database->query("SELECT `id`,`username`,`motto`,`look`,`online`,`last_online` FROM `users` WHERE `rank` = ? AND `hidden` = '0'", [$Ranks->id]);

  $staff .= '<div class="box-content">';

  if ($getMembers->rowCount() > 0)
  {
    $oe = 1;
    while ($member = $getMembers->fetch(PDO::FETCH_OBJ))
    {

      if ($oe == 2)
        $oe = 1;
      else
        $oe = 2;


      $staff .= '<table width="107%" style=" margin-left: -15px;  background-color: ' . (($oe == 2) ? '#fff' : '#E6E6E6') . ';">
      <tbody>
        <tr>
          <td valign="middle" width="25">
          <div style="position: relative; overflow:hidden; height:65px;">
            <img style="margin-top: -10px;" src="https://www.habbo.com.br/habbo-imaging/avatarimage?hb=img&figure=' .$member->look . '&gesture=sml&size=m.">
          </div>
          </td>
          <td valign="top">
            <td style="font-size: 90%; margin: 10px 0px 0px 0px;">
              <p><a href="#"/><strong>' .$member->username . '</strong></a></p>
              <p style="padding: 0px;"><img src="http://localhost/images/motto.gif"/> ' . $member->motto . '</p>
              <p><img src="http://localhost/images/login.gif"/> '. date("jS \of M - h:ia T", $member->last_online) .'</p>
            </td>
          </td>
          <td valign="top" style="float: right;">' . (($member->online == "1") ? '<img src="http://localhost/images/online.gif"/>': '<img src="http://localhost/images/habbo_offline_big.gif"/>') . '
          <br />
          <img src="http://localhost/swfs/c_images/album1584/' . $Ranks->badgeid . '.gif" title="' . substr($Ranks->name, 0, -1) . '">
          </td>
        </tr>

      </tbody>
      </table>';

    }
  }
  else
  {
    $staff .= '<i>There are no users in this staff group yet.</i>';
  }

  $staff .= '</div>
  </div>
  </div>
  <script type="text/javascript">if (!$(document.body).hasClassName(\'process-template\')) { Rounder.init(); }</script> ';
}
$this->template->addTemplate('staff', $staff);

?>
