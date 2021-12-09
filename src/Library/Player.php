<?php
namespace Webpane\Nestedset\Library;
class Player{
    private $name;
    function __construct($name="")
    {
        $this->name=$name;
    }

    public function capitalize(){
        return ucwords(strtolower($this->name));
    }
}