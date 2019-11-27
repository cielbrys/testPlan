
 <?php
 if (!empty($_SESSION['error_page4'])) {
 echo $_SESSION['error_page4'];
 unset($_SESSION['error_page4']);
 }

 if (!empty($_SESSION['page4'])){
  $page4 = $_SESSION['page4'];
  }
 ?>

 <form action="index.php?page=addPost5" method="post">
 <p>What kind of post is it?</p>
 <label><img src="" alt="brand"> Brand Deal
 <input type="checkbox" name="kindOfPost" value="brand"<?php if (!empty($page4)){ if($page4["kindOfPost"] == 'brand'){echo 'checked'; }}?>>
 </label>
 <label><img src="" alt="recreational"> Recreational
 <input type="checkbox" name="kindOfPost" value="recreational" <?php if (!empty($page4)){ if($page4["kindOfPost"] == 'recreational'){echo 'checked'; }}?>>
 </label>
 <label><img src="" alt="promoteBusiness"> Promote a Bussiness
 <input type="checkbox" name="kindOfPost" value="promoteBusiness" <?php if (!empty($page4)){ if($page4["kindOfPost"] == 'promoteBusiness'){echo 'checked'; }}?> >
 </label>
 <label><img src="" alt="promoteEvent"> Promote an Event
 <input type="checkbox" name="kindOfPost" value="promoteEvent" <?php if (!empty($page4)){ if($page4["kindOfPost"] == 'promoteEvent'){echo 'checked'; }}?> >
 </label>
 <label>Choose your age demographic
 <input type="range" name='age'  value=<?php if (!empty($page4)){ if(!empty($page4["age"])){echo $page4['age'];} else {echo '18';}}?> />
 </label>
 <label>Choose your upload date
 <input type="date" name='date' required <?php if (!empty($page4)){ if(!empty($page4["date"])){echo 'value=' . $page4['date'];}}?> />
 </label>


 <a href="index.php?page=addPost3"><</a>
 <button class='next'>NEXT</button>
 </form>

