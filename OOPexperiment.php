<?php
class Element{
    private static $count = 1;
    private $id;
    private $value;

    function __construct(string $value = ""){
        $this->id = self::$count++;
        $this->setValue($value);
    }
    public function setValue($value): Element{
        $this->value = $value;
        return $this;
    }
    public function getValue(): string{
        return $this->value;
    }
    public function getId(): int{
        return $this->id;
    }
    public static function getCount(): int{
        return self::$count;
    }
}

$data = new Element("test");
echo $data->getvalue() . "\n";
echo $data->getId() . "\n";
$data2 = new Element("testing");
echo $data2->getvalue() . "\n";
echo $data2->getId();
