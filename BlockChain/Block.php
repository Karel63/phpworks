<?php
Class Block{
    private $id;
    private $value;
    private $hash;
    function setId(int $text){
        $this->id = $text;
    }
    function setValue(string $text){
        $this->value = $text;
    }
    function setHash(string $text){
        $this->hash = $text;
    }
    function getId():int{
        return $this->id;
    }
    function getValue():string{
        return $this->value;
    }
    function getHash():string{
        return $this->hash;
    }
    function generateHash(string $previousHash){
        return hash("SHA256", $this->id . $this->value . $previousHash);
    }
}