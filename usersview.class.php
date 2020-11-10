<?php

require_once 'users.class.php';

class UsersView extends Users{

  public function showData($id){
    $results = $this->getData($id);

    echo "<h1>Animal: " . $results[0]['animal'] . "</h1></br>";
    echo "<h1>Usuário: " . $results[0]['usuario'] . "</h1></br>";
  }

}