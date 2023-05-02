<?php
require "Countable.php";
Class Items implements Countable{
    private array $items;
    public function __construct(){
        print "Constructed";
    }
    public function addItems($items): Items{
        return $this->items = $items;
    }
    public function count():int{
        return count($this->items);
    }
    public function clear(): Items{
        $this->items = [""];
        return $this;
    }
}