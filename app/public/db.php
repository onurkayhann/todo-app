<?php 

class DB {
    private $dbhost ="localhost";
    private $dbUser = "onur";
    private $dbPassword = "secret";
    private $dbName = "onurdb";
    private $conection;

    public function __construct() {
        echo "class activated";
    }
}

?>