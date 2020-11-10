<?php
include 'dbh.class.php';

?>

<?php

class Users extends Dbh{

  protected function setData($animal, $usuario){

    $sql = "INSERT INTO animalreg(animal, usuario) VALUES (?, ?)";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$animal, $usuario]);

    $results = $stmt->fetchAll();
    return $results;

  }

  protected function getData($id){
    $sql = "SELECT * FROM animalreg WHERE id= ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$id]);

    $results = $stmt->fetchAll();
    return $results;
  }

  protected function delData($id){
    $sql = "DELETE FROM animalreg WHERE id= ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$id]);

    $result = $stmt->fetchAll();
    return $result;
  }

  protected function editsData($animal, $usuario){
    $sql = "UPDATE animalreg SET animal= ? WHERE usuario= ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$animal, $usuario]);

    $result = $stmt->fetchAll();
    return $result;
  }

}

?>