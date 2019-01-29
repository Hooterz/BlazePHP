<?php
/*
		Orbit CMS
		Efficient Habbo Hotel Retro Management System
		Coded by Sebastian Escudero ft. Josh Satherley
*/

  class PhpDataObjects {

    public static $DB; // The Database handler

    public function __construct($host, $port, $database, $username, $password){ //Starts up the page output
      try{
        self::$DB = new PDO(
            'mysql:host=' .
            $host
            . ';port=' .
            $port
            . ';dbname=' .
            $database,
            $username,
            $password
        ) ;
        self::$DB->setAttribute(
            PDO::ATTR_ERRMODE,
            PDO::ERRMODE_EXCEPTION
        ) ;
      }catch( PDOException $error ) {
        die(
              $error->getMessage()
          ) ;
      }
    }
    public function query($query, array $values){
    	$data = self::$DB->prepare($query);
    	$data->execute($values);
        return $data;
    }
    public function fetch_array($query, array $values){
        $data = self::$DB->prepare($query);
        $data->execute($values);
        return $data->fetch(PDO::FETCH_ASSOC);
    }
    public function num_rows($query, array $values){
        $data = self::$DB->prepare($query);
        $data->execute($values);
        return $data->rowCount();
    }

  }

 ?>
