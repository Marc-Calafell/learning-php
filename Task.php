<?php
class Task{

    protected $description;
    private $completed;

    public function __construct($description, $completed){
        $this->description = $description;
        $this->completed = $completed;
    }

    public function complete(){
        $this->completed = true;
    }

    public function setDescription($description){
        $this->description = $description;
    }

    public function getCompleted()
    {
        return $this->completed;
    }


    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $completed
     */
    public function Completed($complete=null)
    {
        if(completed == null){
            return $complete;
        }
        return $this->$complete;
    }

}
