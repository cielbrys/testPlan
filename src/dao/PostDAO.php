<?php
require_once( __DIR__ . '/DAO.php');

class PostDAO extends DAO {

  public function selectAllById($id){
    $sql = "SELECT * FROM `posts` WHERE `user_id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function delete($id){

  }

  public function insertPost($data) {
    $errors = $this->validate( $data );
    if (empty($errors)) {
      $sql = "INSERT INTO `posts` (`id`, `title`, `image_name`, `image`, `platform`, `description`, `friendtags`, `hashtags_id`, `upload_date`, `kind_id`, `Age`, `User_id`) VALUES ( NULL, :title, :image_name, :image, :platform, :description, :friendstag, :hashtags_id, :upload_date, :kind_id, :Age, :User_id)";
      $stmt = $this->pdo->prepare($sql);
      $stmt->bindValue(':title', $data['postTitle']);
      $stmt->bindValue(':image_name', $data['postName']);
      $stmt->bindValue(':image', '../assets/img/uploads/' . $data['imgName']);
      $stmt->bindValue(':platform', $data['socialMedia']);
      $stmt->bindValue(':description', $data['description']);
      $stmt->bindValue(':friendstag', $data['friends']);
      $stmt->bindValue(':hashtags_id', '2 3 4');
      $stmt->bindValue(':upload_date', $data['date']);
      $stmt->bindValue(':kind_id', '1');
      $stmt->bindValue(':Age', $data['age']);
      $stmt->bindValue(':User_id', '1');
    $stmt->execute();
     return true;
    } else{
    return false;
    }
  }

  public function validate( $data ){
    $errors = [];
    return $errors;
  }

}
