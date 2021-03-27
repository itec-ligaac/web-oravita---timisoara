<?php

class View extends Model{

    public function getDestinations(){
        $results=$this->getDest();
        return $results;
    }

}