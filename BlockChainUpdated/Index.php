<?php
require "IChain.php";
require "Chain.php";
require "Block.php";

$ch = (new Chain)
    ->addBlock(new Block("Rumburk"))
    ->addBlock(new Block("Varnsdorf"))
    ->addBlock(new Block("Jiříkov"))
    ->addBlock(new Block("Šluknov"))
    ->addBlock(new Block("Krásná Lípa"));
var_dump($ch->getBlocks());

/*var_dump($ch->getBlock(1));
var_dump($ch->getBlock(2));
var_dump($ch->getLastBlock());
var_dump($ch->getContent());*/

echo "Chain " . ($ch->isValid() ? "is" : "is not") . " valid.\n";

/*$test = new Block("test");
var_dump($test);
$test2 = new Block("test2");
var_dump($test2);
$test3 = new Block("test3");
var_dump($test3);

$data1 = new Block;
$data1->setId(1);
var_dump($data1->getId());
$data1->setValue("test");
var_dump($data1->getValue());
$hash = $data1->generateHash("testing");
$data1->setHash($hash);
var_dump($data1->getHash());*/