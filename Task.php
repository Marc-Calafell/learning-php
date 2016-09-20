<?php
class Task{

    public $description;

    public function __construct($description, $completed){
        $this->description = $description;
        $this->completed = $completed;
    }

}
