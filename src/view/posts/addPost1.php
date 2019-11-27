
 <?php
 if (!empty($_SESSION['page1'])){
 $page1 = $_SESSION['page1'];
 }
 ?>
 </span>
 <form class ='form__page' enctype='multipart/form-data' action="index.php?page=addPost2" method="POST">
 <div class="form__wrapper">
    <label class='post_title'>post title
    <input class='post_title__input' required type="text" name="postName" <?php if (!empty($page1)){ foreach($page1 as $input) {if(!empty($input)){ echo 'value="' . $page1['postName'] . '"'; } }}?>>
    </label>
    <label class="upload_file left top right bot"> upload your post here
    <input type="file" name="file" required >
    </label>
    </div>
 <button class='next'>NEXT</button>
 </form>

