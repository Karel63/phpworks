<?php
require "Items.php";
Class Item{
    private string $value;
    public function Item(string $value){
        $this->value = $value;
    }
    public function getValue(): string{
        return $this->value;
    }
}