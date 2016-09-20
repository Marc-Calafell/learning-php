<?php

class Task{

    public $description;

    public $complete;

    public function  __construct($description, $complete) {
        $this->description = $description;
        $this->complete = $complete;

    }

    public function complete(){
        $this->complete = true;

    }
    public function getComplete() {

        return $this->complete;
    }

    public function description($description) {

        $this->description = $description;

    }


}