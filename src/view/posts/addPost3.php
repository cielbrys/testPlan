
 <?php
 if (!empty($_SESSION['error_page3'])) {
 echo $_SESSION['error_page3'];
 unset($_SESSION['error_page3']);
 }
 if (!empty($_SESSION['page3'])){
  $page3 = $_SESSION['page3'];
  }
 ?>

 <form class='form__page' action="index.php?page=addPost4" method="post">
  <div class='form__wrapper3'>
    <label class='add__description'>Add a post description
    <input required type="text" name="description" <?php if(!empty($page3)){ if(!empty($page3['description'])){ echo 'value=' . $page3['description'];} } ?>>
    </label>
    <label class='add__hashtags'>Add hashtags
    <input type="text" name="hashtag" placeholder = "#" <?php if(!empty($page3)){ if(!empty($page3['hashtag'])){ echo 'value=' . $page3['hashtag'];} } ?>>
    </label>
    <label class='add__friends'>
    <input type="text" name="friends" placeholder='@' <?php if(!empty($page3)){ if(!empty($page3['friends'])){ echo 'value=' . $page3['friends'];} } ?>>
    </label>
  </div>


 <a class='back' href="index.php?page=addPost1"><img class='back-img' src="./assets/img/icons/back.svg" alt="back"></a>
 <button class='next'>NEXT</button>
 </form>

