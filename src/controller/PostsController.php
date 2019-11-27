<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/PostDAO.php';
require_once __DIR__ . '/../dao/UserDAO.php';
require_once __DIR__ . '/../dao/HashtagDAO.php';


class PostsController extends Controller {

  private $postDAO;

  function __construct() {
    $this->postDAO = new PostDAO();
    $this->userDAO = new UserDAO();
    $this->hashtagDAO = new HashtagDAO();
  }

  public function index() {
   // if (!isset($_SESSION['access_token'])) {
   //  header('Location: index.php?page=login');
   //  exit();
   // }
    if(!empty($_POST)){
      $formData = $_SESSION['page1'] + $_SESSION['page2'] + $_SESSION['page3'] + $_SESSION['page4'] + $_POST;
      $inserPost = $this->postDAO->insertPost($formData);
      if($inserPost){
       unset($_SESSION['page1'], $_SESSION['page2'], $_SESSION['page3'], $_SESSION['page4']);
        header('Location: index.php?page=home');
        exit();
    }
  }

    $user = $this->userDAO->selectById($_SESSION['userData']['id']);
    $allPost = $this->postDAO->selectAllById($user['id']);
    $hastags = $this->hashtagDAO->selectAll();

    $this->set('title', 'HOME');
    $this->set('user', $user);
    $this->set('allPosts', $allPost);
    $this->set('hashtags', $hastags);
  }

  public function login() {

  }

  public function fbcallback() {

  }


  public function addPost1() {

  }

  public function addPost2() {
    $errors_page1 = array();
    $page1 = array();
    if (!empty($_POST)){
      if (empty($_POST['postName'])){
        $errors_page1['postName'] = 'geef een titel';
      } else{
        $page1['postName'] = $_POST['postName'];
      }
      if (empty($_FILES['file'])){

        $errors_page1['file'] = 'geef een file mee te geven';
      }else{
        if(isset($_FILES['file'])){
          $finalPath = './assets/img/uploads';
          $name = $_FILES['file']['name'];
          $page1['imgName'] = $_FILES['file']['name'];
         move_uploaded_file($_FILES['file']['tmp_name'], "$finalPath/$name");
        }
        };
      $_SESSION['page1'] = $page1;
    }

    if (!empty($errors_page1)){
      $_SESSION['error_page1'] = $errors_page1;
  }
}

  public function addPost3() {

    $hashtags = $this->hashtagDAO->selectAll();
    $this->set('hashtags', $hashtags);
    $errors_page2 = array();
    $page2 = array();
    if (!empty($_POST)){
      if (empty($_POST['socialMedia'])){
        $errors_page1['socialMedia'] = 'Kies een platform';
      } else{
        $page2['socialMedia'] = $_POST['socialMedia'];
      }
      $_SESSION['page2'] = $page2;
    }
    if (!empty($errors_page2)){
      $_SESSION['error_page2'] = $errors_page2;
  }
  }

  public function addPost4() {
    $errors_page3 = array();
    $page3 = array();
    if (!empty($_POST)){
      if (empty($_POST['description'])){
        $errors_page1['description'] = 'Voeg een beschrijving toe';
      } else{
        $page3['description'] = $_POST['description'];
      }
      $page3['hashtag'] = $_POST['hashtag'];
      $page3['friends'] = $_POST['friends'];
      $_SESSION['page3'] = $page3;
    }
    if (!empty($errors_page3)){
      $_SESSION['error_page3'] = $errors_page3;
  }
  }

  public function addPost5() {
    $errors_page4 = array();
    $page4 = array();
    if (!empty($_POST)){
      if (empty($_POST['kindOfPost'])){
        $errors_page4['kindOfPost'] = 'Kies een soort';
      } else{
        $page4['kindOfPost'] = $_POST['kindOfPost'];
      }
      if (empty($_POST['date'])){
        $errors_page4['date'] = 'Voeg een datum toe';
      } else{
        $page4['date'] = $_POST['date'];
      }
      $page4['age'] = $_POST['age'];
    }
    if (!empty($errors_page4)){
      $_SESSION['error_page4'] = $errors_page4;
  }
  $age = (int)$page4['age'];

  if(!empty($_POST['kindOfPost']) && !empty($age)){
    if($_POST['kindOfPost'] == "promoteBusiness" && $age < 18 ){
      $page4['time'] = date("H:i", strtotime("16:30"));
    } else if($_POST['kindOfPost'] == "promoteBusiness" && $age < 50 ){
      $page4['time'] = date("H:i", strtotime("18:30"));
    } else if($_POST['kindOfPost'] == "promoteBusiness" && $age < 90 ){
      $page4['time'] = date("H:i", strtotime("20:30"));
    }
    if($_POST['kindOfPost'] == "brand" && $age < 18 ){
      $page4['time'] = date("H:i", strtotime("17:00"));
    } else if($_POST['kindOfPost'] == "brand" && $age < 50 ){
      $page4['time'] = date("H:i", strtotime("19:30"));
    } else if($_POST['kindOfPost'] == "brand" && $age < 90 ){
      $page4['time'] = date("H:i", strtotime("20:00"));
    }
    if($_POST['kindOfPost'] == "recreational" && $age < 18 ){
      $page4['time'] = date("H:i", strtotime("12:30"));
    } else if($_POST['kindOfPost'] == "recreational" && $age < 50 ){
      $page4['time'] = date("H:i", strtotime("19:00"));
    } else if($_POST['kindOfPost'] == "recreational" && $age < 90 ){
      $page4['time'] = date("H:i", strtotime("19:00"));
    }
    if($_POST['kindOfPost'] == "promoteEvent" && $age < 18 ){
      $page4['time'] = date("H:i", strtotime("17:00"));
    } else if($_POST['kindOfPost'] == "promoteEvent" && $age < 50 ){
      $page4['time'] = date("H:i", strtotime("19:30"));
    } else if($_POST['kindOfPost'] == "promoteEvent" && $age < 90 ){
      $page4['time'] = date("H:i", strtotime("19:00"));
    }

  }
  $_SESSION['page4'] = $page4;

  }


}
