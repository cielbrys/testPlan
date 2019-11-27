<?php

require_once( __DIR__ . '/DAO.php');

class HashtagDAO extends DAO {

  public function selectAll(){
    $sql = "SELECT * FROM `hashtags`";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);

  }
}
