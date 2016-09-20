<?php
class Task{

    public $description;

    public function __construct($description, $completed){
        $this->description = $description;
        $this->completed = $completed;
    }

    public function complete(){
        $this->completed = true;
    }

    public function description($description){
        $this->description = $description;
    }

}
