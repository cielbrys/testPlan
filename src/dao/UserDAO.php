<?php

require_once( __DIR__ . '/DAO.php');

class UserDAO extends DAO {

  public function selectById($id){
    $sql = "SELECT * FROM `users` WHERE `facebook_id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);

  }

  public function delete($id){

  }

  public function insert($data) {
    $errors = $this->validate( $data );
    if (empty($errors)) {
      $sql = "INSERT INTO `todos` (`created`, `modified`, `checked`, `text`) VALUES (:created, :modified, :checked, :text)";
      $stmt = $this->pdo->prepare($sql);
      $stmt->bindValue(':created', $data['created']);
      $stmt->bindValue(':modified', $data['modified']);
      $stmt->bindValue(':checked', $data['checked']);
      $stmt->bindValue(':text', $data['text']);
      if ($stmt->execute()) {
        return $this->selectById($this->pdo->lastInsertId());
      }
    }
    return false;
  }

  public function validate( $data ){
    $errors = [];
    if (!isset($data['created'])) {
      $errors['created'] = 'Gelieve created in te vullen';
    }
    if (!isset($data['modified'])) {
      $errors['modified'] = 'Gelieve modified in te vullen';
    }
    if (!isset($data['checked'])) {
      $errors['checked'] = 'Gelieve checked in te vullen';
    }
    if (empty($data['text']) ){
      $errors['text'] = 'Gelieve een text in te vullen';
    }
    return $errors;
  }

}
