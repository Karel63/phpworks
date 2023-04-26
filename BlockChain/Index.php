<?php
require "Block.php";
//require "Chain.php";

$data1 = new Block;
$data1->setId(1);
var_dump($data1->getId());
$data1->setValue("test");
var_dump($data1->getValue());
$hash = $data1->generateHash("testing");
$data1->setHash($hash);
var_dump($data1->getHash());