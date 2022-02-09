<?php
  class Database {

    //Database settings
    public $host = DB_HOST;
    public $user = DB_USER;
    public $pass = DB_PASS;
    public $dbname = DB_NAME;

    public $link;
    public $error;

    //Setting up database connection
    private function connectDB() {
      $this->link = new mysqli($this->host, $this->user, $this->pass, $this->dbname);

      //generate error if database connection fails
      if(!$this->link) {
        $this->error = "Connection fail".$this->link->connect_error;
        return false;
      }
    }


  }



?>