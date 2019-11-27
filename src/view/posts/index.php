<?php

//if (!isset($_SESSION['access_token'])) {
//		header('Location: index.php?page=login');
//		exit();
 // }
$_SESSION['userData']['id'] = '1311839185662845';

?>

<div class="wrapper">
  <nav class='navigation'>
        <ul>
          <li><a href="">+</a></li>
          <li><a href="">i</a></li>
        </ul>
  </nav>
<div class='content'>
  <form class='sort' action="index.php" method="get">
  <label for="soort">
  sort by
        <select class="sortDrop" name="soort" id="soort" class="filter-soort">
            <option value="date">Date</option>
            <option value="socMedia">Social Media</option>
            <option value="hashtag">Hashtag</option>
            <option value="kind">Kind</option>
            </select>
  </label>
  </form>

  <section class="allPosts">
  <?php
  foreach($allPosts as $post):
  ?>
  <article class="post">
  <div>
  <a class="post_wrapper<?php if(!empty($_GET['postId'])){ if ($_GET['postId'] == $post['id']){ echo '-open';};} ?>" href="index.php?postId=<?php echo $post['id'] ?>">
  <img src="./assets/img/icons/<?php echo $post['platform']?>big.svg" alt="socialMedia" width="28" height="29" >
  <h2 class="post__title"> <?php echo $post['title'] ?></h2>
  <p class="post__gepland">GEPLAND: <?php echo $post['upload_date'] ?> - 1h</p>
  <?php if(!empty($_GET['postId'])){ if ($_GET['postId'] == $post['id']){?>
    <p class="post_beschrijving__title">BESCHRIJVING</p>
  <p class="beschrijving"><?php echo $post['description'] ?></p>
    <?php
  }
}
    ?>
  <div class="post__hashtags<?php if(!empty($_GET['postId'])){ if ($_GET['postId'] == $post['id']){ echo '-open';};} ?>">
  <?php
    if (!empty($post['hashtags_id'])){
      $postHashtagsText = explode(' ', $post['hashtags_id']);
      $postHashtags = array();
      foreach($postHashtagsText as $postHashtag){
        $hash = (int)$postHashtag;
        array_push($postHashtags, $hash);
      }
      foreach($postHashtags as $postHashtag){
        foreach($hashtags as $hashtag){
        if($hashtag['id'] ==$postHashtag){
     echo '<p class="hashTag">' . $hashtag['tag'] . '</p>';
        }
      }
    }
    }
  ?>
  </div>
  <?php if(!empty($_GET['postId'])){ if ($_GET['postId'] == $post['id']){?>
 <div class="post_rightWrapper">
  <a class='' href="index.php?page=wijzig">wijzig</a>

<?php
  }
}
?>
  <div class="post_imgWrapper<?php if(!empty($_GET['postId'])){ if ($_GET['postId'] == $post['id']){ echo '--open';};} ?>">
  <img class="post__image<?php if(!empty($_GET['postId'])){ if ($_GET['postId'] == $post['id']){ echo '--open';}; }?>" src="<?php echo $post['image'] ?>" alt="postImg">
  </div>
  </a>
  </div>

  </article>

  <?php
    endforeach;
  ?>

  <!--- When open --->
  <article class="post">
  <div class="post_wrapper-open">
  <img src="./assets/img/icons/fb.svg" alt="socialMedia" width="28" height="29" >
  <h2 class="post__title"> POST TITLE</h2>
  <p class="post__gepland">GEPLAND: 13/11/2019 - 1h</p>
  <p class="post_beschrijving__title">BESCHRIJVING</p>
  <p class="beschrijving">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
  <div class="post__hashtags-open">
  <p class="hashTag">#hashTag</p>
  <p class="hashTag">#hashTagButLonger</p>
  </div>
  <div class="post_rightWrapper">
  <a href="">wijzig</a>
  <div class="post_imgWrapper--open">
  <img class="post__image--open" src="./assets/img/uploads/kameel.jpg" alt="postImg">
  </div>
  </div>
  </div>
  </article>

  <!--- When Closed --->
  <article class="post">
  <div class="post_wrapper">
  <img src="./assets/img/icons/fb.svg" alt="socialMedia" width="28" height="29" >
  <h2 class="post__title"> POST TITLE</h2>
  <p class="post__gepland">GEPLAND: 13/11/2019 - 1h</p>
  <div class="post__hashtags">
  <p class="hashTag">#hashTag</p>
  <p class="hashTag">#hashTagButLonger</p>
  </div>
  <div class="post_imgWrapper">
  <img class="post__image" src="./assets/img/uploads/kameel.jpg" alt="postImg">
  </div>
  </div>
  </div>
  </article>
  </section>
  </div>
  <!--- When add is open--->
  <div class="additions">
  <button class="addNote"><div class="buttonText">+</div></button>
      <div class="newPost">
        <a class="postTitle" href="index.php?page=addPost1">NEW PHOTO</a>
        <a class="postTitle" href="index.php?page=addPost1">NEW VIDEO</a>
        <a class="postTitle" href="index.php?page=addPost1">NEW ALBUM</a>
        <a class="postTitle" href="index.php?page=addPost1">NEW QUOTE</a>
      </div>
    <button class="addButton"><div class="buttonText">+</div></button>
  </div>
</div>
