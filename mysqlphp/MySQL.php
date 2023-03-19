<?php
require "IDB.php";

//Poznámky k nedostatkům jsou v README.md

class MySQL implements IDB{
  public function connect(string $host = "127.0.0.1", string $username = "root", string $password = "", string $database = "countries"): ?static{
    $con = mysqli_connect("$host", "$username", "$password", "$database");
    if ($con -> connect_error){
      return $con->connect_error;
    }
  }
  function select(string $query): array{
    $data = self::connect()->query("SELECT * FROM $query");
    $data = mysqli_fetch_all($data, MYSQLI_ASSOC);
    return $data;
  }
  function insert(string $table, array $data): bool{
    $data = self::connect()->query("INSERT INTO $table(name, capital) VALUES('$data[0]', '$data[1]')");
    return true;
  }
  function update(string $table, int $id, array $data): bool{
    $data = self::connect()->query("UPDATE $table SET name = '$data[0]', capital = '$data[1]'  WHERE id='$id'");
    return false;
  }
  function delete(string $table, int $id): bool{
    $data = self::connect()->query("DELETE FROM $table WHERE id='$id'");
    return true;
  }
}

$test = new Mysql();
$test->insert("country", array("Czechia", "Prague"));
$test->insert("country", array("Slovakia", "Bratislava"));
$test->insert("country", array("Indonesia", "Jakarta"));
$test->update("country", 1, array("Czech Republic", "Prague"));
$test->delete("country", 3);
$test->connect();
var_dump($test->select("country"));