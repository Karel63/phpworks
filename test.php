<?php
function insert(string $table, array $data): string{
    $name = implode(", ", array_keys($data));
    $value = implode("', '", $data);
    return "INSERT INTO $table($name) VALUES('$value')";
}

echo insert("city", ["name"=>"Mikulášovice", "population"=>"478", "region_id"=>"2"]);
