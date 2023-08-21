<?Php

class Test extends Dbh {

    public function getUsers(){ 

        $sql = 'SELECT * FROM pizzas';
        $stmt = $this->connect()->query($sql);

        while($row = $stmt->fetch()){
            echo $row;
        }
    }
}