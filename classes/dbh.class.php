<?php 

class Dbh {

// properties

    private $host = "localhost";
    private $user = "Ocheni";
    private $pwd = "5lP*GI]9Cl!CHfD.";
    private $dbName = "ninja pizza";

// method

protected function connect(){
    
    $dsn = 'mysql:host='.$this->host.';dbName='.$this->dbName;
    $pdo = new PDO($dsn, $this->user, $this->pwd);

    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    return $pdo;
}

}
