
 <?php
 if (!empty($_SESSION['error_page2'])) {
 echo $_SESSION['error_page2'];
 unset($_SESSION['error_page2']);
 }
 if (!empty($_SESSION['page2'])){
 $page2 = $_SESSION['page2'];
 }
 ?>

 <form class='form__page' action="index.php?page=addPost3" method="post">
   <div class='form__wrapper2'>
      <h1 class='social_title'>Choose a platform</h1>
      <label class='social social--fb'><img src="./assets/img/icons/fbbig.svg" alt="fb">
      <input type="radio" name="socialMedia" value="fb" <?php  if (!empty($page2)){ if($page2["socialMedia"] == 'fb'){echo 'checked'; }}?>>
      </label>
      <label class='social social--insta'><img src="./assets/img/icons/instabig.svg" alt="insta">
      <input type="radio" name="socialMedia" value="insta" <?php if (!empty($page2)){ if($page2["socialMedia"] == 'insta'){echo 'checked'; }}?>>
      </label>
      <label class='social social--twitter'><img src="./assets/img/icons/twitterbig.svg" alt="twitter">
      <input type="radio" name="socialMedia" value="twitter" <?php if (!empty($page2)){ if($page2["socialMedia"] == 'twitter'){echo 'checked'; }}?>>
      </label>
      <label class='social social--linked'><img src="./assets/img/icons/linkedbig.svg" alt="linkIn">
      <input type="radio" name="socialMedia" value="linked" <?php if (!empty($page2)){ if($page2["socialMedia"] == 'linkIn'){echo 'checked'; }}?>>
      </label>
      <label class='social social--yt'><img src="./assets/img/icons/ytbig.svg" alt="YT">
      <input type="radio" name="socialMedia" value="yt" <?php if (!empty($page2)){ if($page2["socialMedia"] == 'YT'){echo 'checked'; }}?>>
      </label>
      <label class='social social--snap'><img src="./assets/img/icons/snapbig.svg" alt="snap">
      <input type="radio" name="socialMedia" value="snap" <?php if (!empty($page2)){ if($page2["socialMedia"] == 'snap'){echo 'checked'; }}?>>
      </label>
    </div>
      <a class='back' href="index.php?page=addPost1"><img class='back-img' src="./assets/img/icons/back.svg" alt="back"></a>
      <button class='next'>NEXT</button>
 </form>

