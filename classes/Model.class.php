<?php

class Model extends Dbh{

    protected function getDest(){
        $sql="SELECT * FROM destinations";
        $stmt=$this->connect()->query($sql);
        $results=$stmt->fetchAll();
        return $results;
    }

    protected function addDest($city,$country){
        $sql="INSERT INTO destinations(city,country) VALUES(?,?)";
        $stmt=$this->connect()->prepare($sql);
        $stmt->execute([$city,$country]);
    }
    
}
