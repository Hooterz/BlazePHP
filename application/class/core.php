<?php
/*
		Orbit CMS
		Efficient Habbo Hotel Retro Management System
		Coded by Sebastian Escudero ft. Josh Satherley
*/

class Core {

  private $database;
  private $user;
  private $config;
  private $template;
  private $ip;

  public function __construct($template){
    global $conf;
    $this->config = $conf;
    $this->template = $template;
    $this->database = new PhpDataObjects($conf->host, $conf->port, $conf->database, $conf->username, $conf->password);
    $this->init();
  }

  private function init(){
    $this->ip = $_SERVER['REMOTE_ADDR'];
    if(isset($_SESSION['userid'])){
      $this->user = new User($_SESSION['userid'], $this->database);
      $this->template->addTemplate('username', $this->user->username);
      $this->template->addTemplate('motto', $this->user->motto);
      $this->template->addTemplate('figure', $this->user->figure);
      $this->template->addTemplate('lastSignedIn', date('m/d/Y',$this->user->lastOn));
      $this->template->addTemplate('email', $this->user->email);
      $this->template->addTemplate('rank', $this->user->rank);
      $this->template->addTemplate('sso', $this->user->auth_ticket);
    }else{
      $this->user = null;
    }
    $this->template->addTemplate('url', $this->config->url);
    $this->template->addTemplate('imagePath', $this->config->imagePath);
    $this->template->addTemplate('habboImagerPath', $this->config->habboImagerPath);
    $this->template->addTemplate('badgeImagePath', $this->config->badgeImagePath);
    $this->template->addTemplate('hotelname', $this->config->hotelname);
    $this->template->addTemplate('online', $this->onlineCount());
  }

  private function hash($key){
    return password_hash($key, PASSWORD_BCRYPT, array('cost' => 12));
  }

  private function onlineCount(){
    return $this->database->fetch_array('SELECT `users_online` FROM `server_status`;', [])['users_online'];
  }

  public function Redirect($url){
    Header('Location: '.$this->config->url.'/'.$url);
    exit;
  }

  public function Login($username, $password){
    $query = $this->database->query('SELECT * FROM `users` WHERE `username` = ? LIMIT 1', [$username]);
    if($query->rowCount() == 0){
      return false;
    }
    while($hash = $query->fetch(PDO::FETCH_OBJ)){
    if(password_verify($password, $hash->password)){
       $_SESSION['userid'] = $hash->id;
       $this->createSSO();
       $this->database->query('UPDATE `users` SET `last_online` = ?, `ip_last` = ? WHERE `id` = ?', [time(), $this->ip, $_SESSION['userid']]);
       return true;
     }
    }
  }

  public function spitRequest(){
    if(file_exists(__DIR__ . '/../handlers/' . $this->template->getRouter()->getRequest() . '.php')){
      include(__DIR__ . '/../handlers/' . $this->template->getRouter()->getRequest() . '.php');
    }
    echo $this->template->finale();
  }

  public function validEmail($email){
    return (filter_var($email, FILTER_VALIDATE_EMAIL) && strlen($email) <= 254) ? true : false;
  }

  public function validName($name)
  {
    $allowed = array(".", "-", "_");
    $name = str_replace($allowed, '', $name);
    if(preg_match('/^[A-Za-z]{1}[A-Za-z0-9]{0,24}$/', $name)){ return true; }else{ return false; }
  }

  public function addUser($username, $password, $email, $motto, $credits, $pixels, $rank, $figure, $gender)
  {
    $q = "INSERT INTO users (username, password, mail, motto, credits, activity_points, rank, look, gender, ip_last, ip_reg, account_created, last_online, auth_ticket) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $this->database->query($q, [$username, $password, $email, $motto, $credits, $pixels, $rank, $figure, $gender, $_SERVER['REMOTE_ADDR'], $_SERVER['REMOTE_ADDR'], time(), time(), '']);
  }

  public function isBanned($value)
  {
    $query = $this->database->query('SELECT null FROM `bans` WHERE `value` = ? LIMIT 1', [$value]);
    if($query->rowCount() > 0)
    {
      return true;
    }
    return false;
  }

  public function createSSO()
	{
		$sessionKey = 'OrbitCMS-'.substr(sha1(time() * rand(9,9999999) + $_SESSION['userid']).'-'.rand(9,9999999).'-'.rand(9,9999999).'-'.rand(9,9999999),0,33);
    $this->database->query('UPDATE `users` SET `auth_ticket` = ? WHERE `id` = ?', [$sessionKey, $_SESSION['userid']]);
		unset($sessionKey);
	}

}
?>
