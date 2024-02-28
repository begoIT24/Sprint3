<?php

class Tigger {
    private static $instance;
    private static $contador = 0;
   
    private function __construct() {
            echo "Building character..." . PHP_EOL;
    }
    public static function getInstance(){
        if (!isset(self::$instance)){             //  if (!self::$instance == null) No funciona
            self::$instance = new Tigger();       //= new self(); També és vàlid
        }
        return self::$instance;
    }
    public function getCounter(){
       return self::$contador; 
    }
    public function roar() {
        echo "Grrr!" .  PHP_EOL;
        self::$contador ++ ;
    }
}
?>