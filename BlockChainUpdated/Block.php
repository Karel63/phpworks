<?php
class Block extends Chain{
    static private $idMain = 1;
    static private $hashLast = NULL;
    protected $id;
    protected $value;
    protected $hash;
    function __construct(string $text){
        Block::setValue($text);
        Block::setId(self::$idMain);
        if(self::$hashLast == NULL){
            Block::setHash(hash("SHA256", Block::getId() . "|" . Block::getValue()));
        }else{
            Block::setHash(Block::generateHash(self::$hashLast));
        }
        self::$hashLast = Block::getHash();
        self::$idMain = self::$idMain + 1;
    }
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
        return hash("SHA256", $previousHash . "|" . $this->id . "|" . $this->value);
    }
}