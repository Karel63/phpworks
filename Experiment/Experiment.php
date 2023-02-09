<?php
$dataTypes = ["int", "string", "float", "bool", /*"array", "object"*/];
$setValues = [/*"'ThisIsString'",*/ 50, 14.3, 0];

$value1 = "";
$value2 = "";
$array2 = "";

$array2 .= "<?php\n" . "require 'Experiment.php';\n\n" . "class convertion{\n";

foreach($dataTypes as $val1){
    $value1 = $val1;
    $array = [ 
        "    public static function $value1" . "TO" . "$value2 ($value1 \$value): $value2{\n",
        "        return \$value;\n",
        "    }\n",
    ];
    foreach($dataTypes as $val2){
        $value2 = $val2;
        $array = [ 
            "    public static function $value1" . "TO" . "$value2 ($value1 \$value): $value2{\n",
            "        return \$value;\n",
            "    }\n",
        ];
        foreach($array as $ar){
            $array2 .= $ar;
        };
    }
}

$array2 .= "}\n\n";

foreach($setValues as $val3){
    foreach($dataTypes as $val1){
        foreach($dataTypes as $val2){
            $array2 .= "\$marsh = convertion::$val1" . "TO" . "$val2($val3);\n" . "echo " . "'$val1 TO $val2 (Value = $val3) = ' . \$marsh ." . '"\n";' . "\n\n";
        }
    }
}

file_put_contents("Experiment2.php", $array2);