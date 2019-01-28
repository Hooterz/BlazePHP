<?php
class Route {

  private $request;
  private $extras;

  public function __construct($uri){
    $temp = explode('/', $uri);
    if(empty($temp[1])){
      $this->request = 'index';
    }else{
      $this->request = $temp[1];
    }
    $this->extras = $temp;
    unset($temp);
  }

  public function getRequest(){
    return $this->request;
  }

  public function getExtra($offset){
    return isset($this->extras[$offset]) ? $this->extras[$offset] : null;
  }

}
?>
