<?php
  class Configuration {
     static private $instance = NULL;
     private $settingsArray;
  
     private function __construct(){
     }
  
     public function __destruct() {
        if(!$this->updated) {
           return;
        }

        foreach ($this->settingsArray as $key => $value) {
          echo("$key = \"$value\"\n");
        }

     }
  
     public function getInstance() {
        if(self::$instance == NULL) {
          self::$instance = new Configuration();
        }
        return self::$instance;
     }
  
     public function get($name) {
        if(isset($this->settingsArray[$name])) {
           return $this->settingsArray[$name];
        } else {
           return(NULL);
        }
     }
  
     public function set($name, $value) {
       if(!isset($this->settingsArray[$name]) OR ($this->settingsArray[$name] != $value)) {
          $this->settingsArray[$name] = $value;
          $this->updated = TRUE;
       }
     }
  }

  $config = Configuration::getInstance();
  $config->set("username", "A");
  $config->set("password", "B");
  print($config->get("username")); 
?>