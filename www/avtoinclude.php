<?php
class Loads{

    function __construct(){
        $this->core();
    }
    public function Run($Dir){
        foreach(glob($Dir) as $Name)
            include_once $Name;
    }


    public function core(){
            $this->Run("core/*.php");
    }
    public function application(){
        $this->Run("applications/*.php");
        $this->Run("applications/*/*.php");
    }
}