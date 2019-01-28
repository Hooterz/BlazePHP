<?php
class User {

  private $database;

  public $id;
  public $username;
  public $email;
  public $motto;
  public $figure;
  public $lastOn;
  public $password;
  public $rank;

  public function __construct($userid, $db){
    $this->database = $db;
    $user = $this->database->fetch_array('SELECT * FROM `users` WHERE `id` = ?', [$userid]);
    $this->id = $user['id'];
    $this->username = $user['username'];
    $this->email = $user['mail'];
    $this->motto = $user['motto'];
    $this->figure = $user['look'];
    $this->lastOn = $user['last_online'];
    $this->password = $user['password'];
    $this->rank = $user['rank'];
  }

  public function updateVar($key, $value){
    $this->database->query('UPDATE `users` SET `'.$key.'` = ? WHERE `id` = ?', [$value, $this->id]);
  }

}
?>
