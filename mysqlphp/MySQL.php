<?php
require "IDB.php";
//Tento kód a README.md byl updatován 20.3.2023 díky získáním nových poznatků k vyřešení ze školy.

class MySQL implements IDB{
  private $con;
  public function connect(
    string $host = "", 
    string $username = "", 
    string $password = "", 
    string $database = ""
  ): ?static{
    $this->con = mysqli_connect($host, $username, $password, $database);
    if($this->con === false){
      echo "Error";
      exit;
    }
    return $this;
  }
  function select(string $query): array{
    $data = mysqli_query($this->con, $query);
    $data = mysqli_fetch_all($data, MYSQLI_ASSOC);
    return $data;
  }
  function insert(string $table, array $data): bool{
    $keys = "";
    $values = "";
    $t = 1;
    foreach($data as $key => $value){
      if(count($data) == $t){
        $keys .= $key;
        $values .= $value;
        break;
      }
      $keys .= $key . ", ";
      $values .= $value . "', '";
      $t++;
    }
    mysqli_query($this->con, "INSERT INTO $table($keys) VALUES('$values')");
    return true;
  }
  function update(string $table, int $id, array $data): bool{
    $keys = "";
    $t = 1;
    foreach($data as $key => $value){
      if(count($data) == $t){
        $keys .= $key . " = '" . $value . "'";
        break;
      }
      $keys .= $key . " = '" . $value . "', ";
      $t++;
    }
    mysqli_query($this->con, "UPDATE $table SET $keys WHERE id='$id'");
    return false;
  }
  function delete(string $table, int $id): bool{
    mysqli_query($this->con, "DELETE FROM $table WHERE id='$id'");
    return true;
  }
}

$test = (new Mysql)->connect("127.0.0.1", "root", "", "countries");
//$test->insert("country", array("name" => "India", "capital" => "New Delhi"));
//$test->insert("country", array("Slovakia", "Bratislava"));
//$test->insert("country", array("Indonesia", "Jakarta"));
//$test->update("country", 1, array("name" => "Hungary", "capital" => "Budapest"));
//$test->delete("country", 3);
var_dump($test->select("SELECT * FROM country"));
