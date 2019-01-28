<?php
class Template {

  private $output;
  private $templates;
  private $route;

  public function __construct($route){
    $this->route = $route;
    $this->getTemplate($this->route->getRequest());
  }

  private function getTemplate($tpl){
    ob_start();
    if(file_exists(__DIR__ . '/../template/' . $tpl . '.php')){
      include(__DIR__ . '/../template/' . $tpl . '.php');
    }else{
      include(__DIR__ . '/../template/404.php');
    }
    $this->output = ob_get_clean();
  }

  private function filterTemplates(){
    foreach($this->templates as $k => $v){
      $this->output = str_replace('{'.$k.'}', $v, $this->output);
    }
  }

  public function getRouter(){
    return $this->route;
  }

  public function addTemplate($key, $value){
    $this->templates[$key] = $value;
  }

  public function finale(){
    $this->filterTemplates();
    return $this->output;
  }

}
?>
