<?php
class Chain implements IChain{
    static private $dataMain = 0;
    static private $data = [];
    public function addBlock(Block $block): static{
        self::$data[self::$dataMain] = $block;
        self::$dataMain = self::$dataMain + 1;
        return $this;
    }
    public function getBlock(int $id): ?Block{
        return self::$data[$id - 1];
    }
    public function getBlocks(): ?array{
        return self::$data;
    }
    public function getLastBlock(): ?Block{
        return self::$data[self::$dataMain - 1];
    }
    public function isValid(): bool{
        $tmp = NULL;
        $hash1 = NULL;
        $hash2 = NULL;
        for($n = 0; $n < count(Chain::getContent()); $n++){   
            if($n == 0){
                $tmp = hash("SHA256", Chain::getContent()[$n][0] . "|" . Chain::getContent()[$n][1]);
            }else{
                $hash1 = hash("SHA256", $tmp . "|" . Chain::getContent()[$n][0] . "|" . Chain::getContent()[$n][1]);
                $tmp = $hash1;
            }
        }
        $hash2 = Chain::getContent()[count(Chain::getContent()) - 1][2];
        if($hash1 == $hash2){
            return true;
        }
        return false;
    }
    public function getContent(): ?array{
        $hashMain = [];
        $hashMain2 = [];
        for($n = 0; $n < count(Chain::getBlocks()); $n++){
            $n2 = 0;
            foreach(Chain::getBlocks()[$n] as $block){
                $hashMain[$n2] = $block;
                $n2++;
            }
            $hashMain2[$n] = $hashMain;
        }
        return $hashMain2;
    }
}