<?php

function bd_nice_number($n) {
    $n = (0+str_replace(",","",$n));

    if(!is_numeric($n)) return false;

    if($n>1000000000000) return round(($n/1000000000000),1).'T';
    else if($n>1000000000) return round(($n/1000000000),1).'B';
    else if($n>1000000) return round(($n/1000000),1).'M';
    else if($n>=1000) return round(($n/1000),1).'K';

    return number_format($n);
}

$credits = '';
$getCredits = $this->database->query("SELECT `username`,`look`,`credits`,`rank_vip`,`online` FROM `users` WHERE `rank` < '2' ORDER BY `credits` DESC LIMIT 10", []);
$oe = 1;

while($creditsStats = $getCredits->fetch(PDO::FETCH_OBJ)) {

  if($creditsStats->online == 1) {
    $opacity = "";
      } else {
    $opacity = "opacity: 0.4;";
      }

  if ($oe == 2)
    $oe = 1;
  else
    $oe = 2;

  $credits .= '
  <table width="100%" style="background-color: ' . (($oe == 2) ? '#fff' : '#E6E6E6') . '">
    <tr>

    <td width="25%"><img style="' .$opacity. '" src="https://www.habbo.com.br/habbo-imaging/avatarimage?hb=img&figure=' . $creditsStats->look . '&size=m&direction=2&head_direction=2&gesture=sml&headonly=1"" align="left">';
    if($creditsStats->rank_vip == 1) {
                    $credits .= '<img style="margin-top: -70px;" align="left" src="http://localhost/swfs/c_images/album1584/BVIP.gif">';
                    }
    if($creditsStats->rank_vip == 2) {
                    $credits .= '<img style="margin-top: -70px;" align="left" src="http://localhost/swfs/c_images/album1584/SVIP.gif">';
                    }
    if($creditsStats->rank_vip == 3) {
                    $credits .= '<img style="margin-top: -70px;" align="left" src="http://localhost/swfs/c_images/album1584/GVIP.gif">';
                    }
    if($creditsStats->rank_vip == 4) {
                    $credits .= '<img style="margin-top: -70px;" align="left" src="http://localhost/swfs/c_images/album1584/event.gif">';
                    }
   $credits .= ' </td>
      <td width="75%"><a href="#"><b>'.(strlen($creditsStats->username) > 10 ? substr($creditsStats->username, 0, -10) : $creditsStats->username).'</b></a><br />' . bd_nice_number($creditsStats->credits).' Credits</td>
    </tr>
  </table>
  ';
}
$this->template->addTemplate('topcredits', $credits);

$duckets  = '';
$getCredits = $this->database->query("SELECT `username`,`look`,`activity_points`,`rank_vip`,`online` FROM `users` WHERE `rank` < '2' ORDER BY `activity_points` DESC LIMIT 10", []);
$oe = 1;

while($creditsStats = $getCredits->fetch(PDO::FETCH_OBJ)) {

  if($creditsStats->online == 1) {
    $opacity = "";
      } else {
    $opacity = "opacity: 0.4;";
      }

  if ($oe == 2)
    $oe = 1;
  else
    $oe = 2;

  $duckets .= '
  <table width="100%" style="background-color: ' . (($oe == 2) ? '#fff' : '#E6E6E6') . '">
    <tr>

    <td width="25%"><img style="' .$opacity. '" src="https://www.habbo.com.br/habbo-imaging/avatarimage?hb=img&figure=' . $creditsStats->look . '&size=m&direction=2&head_direction=2&gesture=sml&headonly=1"" align="left">';
    if($creditsStats->rank_vip == 1) {
                    $duckets .= '<img style="margin-top: -70px;" align="left" src="http://localhost/swfs/c_images/album1584/BVIP.gif">';
                    }
    if($creditsStats->rank_vip == 2) {
                    $duckets .= '<img style="margin-top: -70px;" align="left" src="http://localhost/swfs/c_images/album1584/SVIP.gif">';
                    }
    if($creditsStats->rank_vip == 3) {
                    $duckets .= '<img style="margin-top: -70px;" align="left" src="http://localhost/swfs/c_images/album1584/GVIP.gif">';
                    }
    if($creditsStats->rank_vip == 4) {
                    $duckets .= '<img style="margin-top: -70px;" align="left" src="http://localhost/swfs/c_images/album1584/event.gif">';
                    }
   $duckets .= ' </td>
      <td width="75%"><a href="#"><b>'.(strlen($creditsStats->username) > 10 ? substr($creditsStats->username, 0, -10) : $creditsStats->username).'</b></a><br />' . bd_nice_number($creditsStats->activity_points).' Duckets</td>
    </tr>
  </table>
  ';
}
$this->template->addTemplate('topduckets', $duckets);

$diamonds  = '';
$getCredits = $this->database->query("SELECT `username`,`look`,`vip_points`,`rank_vip`,`online` FROM `users` WHERE `rank` < '2' ORDER BY `vip_points` DESC LIMIT 10", []);
$oe = 1;

while($creditsStats = $getCredits->fetch(PDO::FETCH_OBJ)) {

  if($creditsStats->online == 1) {
    $opacity = "";
      } else {
    $opacity = "opacity: 0.4;";
      }

  if ($oe == 2)
    $oe = 1;
  else
    $oe = 2;

  $diamonds .= '
  <table width="100%" style="background-color: ' . (($oe == 2) ? '#fff' : '#E6E6E6') . '">
    <tr>

    <td width="25%"><img style="' .$opacity. '" src="https://www.habbo.com.br/habbo-imaging/avatarimage?hb=img&figure=' . $creditsStats->look . '&size=m&direction=2&head_direction=2&gesture=sml&headonly=1"" align="left">';
    if($creditsStats->rank_vip == 1) {
                    $diamonds .= '<img style="margin-top: -70px;" align="left" src="http://localhost/swfs/c_images/album1584/BVIP.gif">';
                    }
    if($creditsStats->rank_vip == 2) {
                    $diamonds .= '<img style="margin-top: -70px;" align="left" src="http://localhost/swfs/c_images/album1584/SVIP.gif">';
                    }
    if($creditsStats->rank_vip == 3) {
                    $diamonds .= '<img style="margin-top: -70px;" align="left" src="http://localhost/swfs/c_images/album1584/GVIP.gif">';
                    }
    if($creditsStats->rank_vip == 4) {
                    $diamonds .= '<img style="margin-top: -70px;" align="left" src="http://localhost/swfs/c_images/album1584/event.gif">';
                    }
   $diamonds .= ' </td>
      <td width="75%"><a href="#"><b>'.(strlen($creditsStats->username) > 10 ? substr($creditsStats->username, 0, -10) : $creditsStats->username).'</b></a><br />' . bd_nice_number($creditsStats->vip_points).' Diamonds</td>
    </tr>
  </table>
  ';
}
$this->template->addTemplate('topdiamonds', $diamonds);

$respects = '';
$getTopStats = $this->database->query("SELECT `users`.`username`,`users`.`look`,`users`.`online`,`users`.`rank_vip`,`users`.`rank`,`users`.`hidden`,`user_stats`.`Respect` FROM `user_stats` LEFT JOIN `users` on `user_stats`.`id` = `users`.`id` WHERE `users`.`hidden` = '0' ORDER BY `user_stats`.`Respect` DESC LIMIT 10", []);
$oe = 1;

while($topStats = $getTopStats->fetch(PDO::FETCH_OBJ)) {
  if($topStats->online == 1) {
    $opacity = "";
      } else {
    $opacity = "opacity: 0.4;";
      }

  if ($oe == 2)
    $oe = 1;
  else
    $oe = 2;


  $respects .= '
  <table width="100%" style="background-color: ' . (($oe == 2) ? '#fff' : '#E6E6E6') . '">
    <tr>
      <td width="25%"><img style="' .$opacity. '" src="https://www.habbo.com.br/habbo-imaging/avatarimage?hb=img&figure=' . $topStats->look . '&size=m&direction=2&head_direction=2&gesture=sml&headonly=1"" align="left">';
      if($topStats->rank_vip == 1) {
                    $respects .= '<img style="margin-top: -70px;" align="left" src="http://localhost/swfs/c_images/album1584/BVIP.gif">';
                    }
    if($topStats->rank_vip == 2) {
                    $respects .= '<img style="margin-top: -70px;" align="left" src="http://localhost/swfs/c_images/album1584/SVIP.gif">';
                    }
    if($topStats->rank_vip == 3) {
                    $respects .= '<img style="margin-top: -70px;" align="left" src="http://localhost/swfs/c_images/album1584/GVIP.gif">';
                    }
    if($topStats->rank_vip == 4) {
                    $respects .= '<img style="margin-top: -70px;" align="left" src="http://localhost/swfs/c_images/album1584/event.gif">';
                    }
    if($topStats->rank == 2) {
                    $respects .= '<img style="margin-top: -70px;" align="left" src="http://localhost/swfs/c_images/album1584/TMODNEW.gif">';
                    }
    if($topStats->rank == 3) {
                    $respects .= '<img style="margin-top: -70px;" align="left" src="http://localhost/swfs/c_images/album1584/MODNEW.gif">';
                    }
    if($topStats->rank == 5) {
                    $respects .= '<img style="margin-top: -70px;" align="left" src="http://localhost/swfs/c_images/album1584/ADMINNEW.gif">';
                    }
    if($topStats->rank == 8) {
                    $respects .= '<img style="margin-top: -70px;" align="left" src="http://localhost/swfs/c_images/album1584/MANAGERNEW.gif">';
                    }
    if($topStats->rank == 9) {
                    $respects .= '<img style="margin-top: -70px;" align="left" src="http://localhost/swfs/c_images/album1584/OWNERNEW.gif">';
                    }
      $respects .= '</td>
      <td width="75%"><b><a href="#"<b>'.$topStats->username.'</b></a><br />' . bd_nice_number($topStats->Respect) . ' Respects</td>
    </tr>
  </table>
  ';
}
$this->template->addTemplate('toprespects', $respects);

$online = '';
$getTopStats = $this->database->query("SELECT `users`.`username`,`users`.`look`,`users`.`online`,`users`.`rank_vip`,`users`.`rank`,`users`.`hidden`,`user_stats`.`OnlineTime` FROM `user_stats` LEFT JOIN `users` on `user_stats`.`id` = `users`.`id` WHERE `users`.`hidden` = '0' ORDER BY `user_stats`.`OnlineTime` DESC LIMIT 10", []);
            $oe = 1;
while($topSpats = $getTopStats->fetch(PDO::FETCH_OBJ))
{
  if($topSpats->online == 1) {
      $opacity = "";
        } else {
      $opacity = "opacity: 0.4;";
        }

  $online = $topSpats->OnlineTime;

  $times = array(
    'day'			=>		(60*60*24)
  );

  $days = floor(($online / $times['day']));


    if ($oe == 2)
      $oe = 1;
    else
      $oe = 2;


    $online .= '
    <table width="100%" style="background-color: ' . (($oe == 2) ? '#fff' : '#E6E6E6') . '">
  <tr>
  <td width="20px">';
  echo '<img style="' .$opacity. '" src="https://www.habbo.com.br/habbo-imaging/avatarimage?hb=img&figure=' . $topSpats->look . '&size=m&direction=2&head_direction=2&gesture=sml&headonly=1" align="left">';
      if($topSpats->rank_vip == 1) {
                      $online .= '<img style="margin-top: -70px;" align="left" src="http://localhost/swfs/c_images/album1584/BVIP.gif">';
                      }
      if($topSpats->rank_vip == 2) {
                      $online .= '<img style="margin-top: -70px;" align="left" src="http://localhost/swfs/c_images/album1584/SVIP.gif">';
                      }
      if($topSpats->rank_vip == 3) {
                      $online .= '<img style="margin-top: -70px;" align="left" src="http://localhost/swfs/c_images/album1584/GVIP.gif">';
                      }
      if($topSpats->rank_vip == 4) {
                      $online .= '<img style="margin-top: -70px;" align="left" src="http://localhost/swfs/c_images/album1584/event.gif">';
                      }
      if($topSpats->rank == 2) {
                      $online .= '<img style="margin-top: -70px;" align="left" src="http://localhost/swfs/c_images/album1584/TMODNEW.gif">';
                      }
      if($topSpats->rank == 3) {
                      $online .= '<img style="margin-top: -70px;" align="left" src="http://localhost/swfs/c_images/album1584/MODNEW.gif">';
                      }
      if($topSpats->rank == 5) {
                      $online .= '<img style="margin-top: -70px;" align="left" src="http://localhost/swfs/c_images/album1584/ADMINNEW.gif">';
                      }
      if($topSpats->rank == 8) {
                      $online .= '<img style="margin-top: -70px;" align="left" src="http://localhost/swfs/c_images/album1584/MANAGERNEW.gif">';
                      }
      if($topSpats->rank == 9) {
                      $online .= '<img style="margin-top: -70px;" align="left" src="http://localhost/swfs/c_images/album1584/OWNERNEW.gif">';
                      }
  $online .= '</td>
  <td width="195px"><a href="#"><b>'.$topSpats->username.'</b></a><br />'. $days . ' day(s) online';
  $online .= '</td></table>
  ';
}
$this->template->addTemplate('toponlinetime', $online);

 ?>
