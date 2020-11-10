<?php
require_once 'dbh.class.php';

$redirect = false;

class UsersController extends Users{
  public function createData($animal, $usuario){
    $this->setData($animal, $usuario);
  }

  public function deleteData($id){
    $this->delData($id);
  }

  public function editData($animal, $usuario){
    $this->editsData($animal, $usuario);
    $redirect = true;
  }

  public function redirects(){
    if($redirect){
      header("location: index.php");
      exit();
    }
  }
}