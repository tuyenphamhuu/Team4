<?php

namespace App\Core\Database;

use PDO;

class QueryBuilder
{
  protected $pdo;

  // Type hinting PDO $pdo
  public function __construct(PDO $pdo)
  {
    $this->pdo = $pdo;
  }

  public function selectAll($table)
  {
    $statement = $this->pdo->prepare("select * from {$table}");
    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_CLASS);
  }

  public function insert($table, $parameters)
  {
    $sql = sprintf(
      'insert into %s (%s) values (%s)',
      $table,
      implode(', ', array_keys($parameters)),
      ':' . implode(', :', array_keys($parameters))
    );
    try {
      $statement = $this->pdo->prepare($sql);
      $statement->execute($parameters);
    } catch (Exception $e) {
      return $e->getMessage();
    }
  }
  public function updateById($table, $params, $id, $sql)
  {
    $result = [];
    $keys = array_keys($params);
    $values = array_values($params);
    for($i=0; $i< count($params); $i++) {
      if(gettype($values[$i]) === "string") {
        $temp = $keys[$i] . "='" .$values[$i]. "'";
      }
      else {
        $temp = $keys[$i] . "=" .$values[$i];
      } 
      array_push($result, $temp);
    }      
    $sql = sprintf(
      $sql,
      $table,
      implode(',', $result),
      $id
    );
    
    try {
      $stm = $this->pdo->prepare($sql);
      $stm->execute($params);
    } catch(PDOException $e){
      die($e->getMessage());
    }
  }


  public function deleteById($sql) 
  {
    try {
      $stm = $this->pdo->prepare($sql);
      $stm->execute();
    } catch(PDOException $e){
      die($e->getMessage());
    }
  }


  public function query($sql)
  {
    try {
      $stm = $this->pdo->prepare($sql);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_CLASS);
    } catch(PDOException $e) {
      die($e->getMessage());
    }
  }


  public function getById($sql) 
  {
    //$sql = "select * from {$table} where id={$id}";
    try {
      $stm = $this->pdo->prepare($sql);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_CLASS);
    } catch (PDOException $e) {
      die($e->getMessage());
    }
  }

}
