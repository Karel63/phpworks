<?php

$imagi = new Image("Benin.jpg");
echo $imagi->toHtml() . PHP_EOL;
$imagi->setAlt("Flag of Benin");
echo $imagi->toHtml() . PHP_EOL;

class Image{
    private $src;
    private $alt;

    public function __construct($src){
        $this->setSrc($src);
        $this->setAlt($alt);
    }

    public function setSrc($src){
        if(in_array(substr($src, -4, 4), [
            ".jpg", ".png", ".svg"
        ])){
            $this->src = $src;
        }else{
            $this->src = "No source";
        }
    }

    public function setAlt($alt){
        $this->alt = $alt;
    }

    public function toHtml(){
        return "<img src=" . $this->src . " alt=" . $this->alt . " >";
    }
}
