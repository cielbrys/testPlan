<?php

$form = array();

$form = $_SESSION['page1'] + $_SESSION['page2'] + $_SESSION['page3'] + $_SESSION['page4'];


?>

 <form action="index.php?page=home" method="post">
<label>post title
<input type="text" name="postTitle" value='<?php echo $form['postName'] ?>'>
</label>
<label>description
<input type="text" name="description" value='<?php echo $form['description'] ?>'>
</label>
<img src="/assets/img/uploads/<?php echo $form['imgName'] ?>" alt="test" height = '126' width = '122'>;
<p>your hashtags</p>
<div>
<p><?php echo $form['hashtag'] ?></p>
</div>
<p>your friendstag</p>
<div>
<p><?php echo $form['friends'] ?></p>
</div>

<p>best time to upload</p>
<div>
<label>
 <input type="date" name='date' required <?php if (!empty($form['date'])){ echo 'value=' . $form['date'];}?> />
 -
 <input type="text" name='time' <?php if (!empty($form['time'])){ echo 'value=' . $form['time'];}?>>
 </label>
</div>



 <a href="index.php?page=addPost4"><</a>
 <input type="submit" class='next'></button>
 </form>

