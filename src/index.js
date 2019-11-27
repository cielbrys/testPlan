require('./style.css');
{
  const $menu = document.querySelector('.newPost');
  const $addButton = document.querySelector('.addButton');
  //  const $posts = document.querySelectorAll('.post');
 // const $hashtag= document.querySelector('.test');

  const init = () => {
  //  $hashtag.addEventListener('input', handleHashtagFilter);

    $menu.textContent = '';
    $addButton.addEventListener('click', displayMenu);
  };

  //const handleHashtagFilter = e => {

  //};

  const displayMenu = () => {
    if ($menu.innerHTML === '') {
      const $photo = document.createElement('a');
      $photo.href = 'index.php?page=addPost1';
      $photo.textContent = 'NEW PHOTO';
      $menu.appendChild($photo);

      const $video = document.createElement('a');
      $video.href = 'index.php?page=addPost1';
      $video.textContent = 'NEW VIDEO';
      $menu.appendChild($video);

      const $album = document.createElement('a');
      $album.href = 'index.php?page=addPost1';
      $album.textContent = 'NEW ALBUM';
      $menu.appendChild($album);

      const $note = document.createElement('a');
      $note.href = 'index.php?page=addPost1';
      $note.textContent = 'ADD NOTE';
      $menu.appendChild($note);

      $addButton.classList.add('addButton__rotated');
    } else {
      $menu.textContent = '';
      $addButton.classList.remove('addButton__rotated');
    }
  };

  init();
}
