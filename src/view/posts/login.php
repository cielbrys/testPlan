<?php
	require_once "config.php";

	if (isset($_SESSION['access_token'])) {
		header('Location: index.php');
		exit();
	}


	$permissions = ['email'];
  $loginUrl = $helper->getLoginUrl('http://localhost:8888/index.php?page=fbcallback', $permissions);

  echo '<form action="'. $loginUrl . '" method="post">';
	echo '<input type="button" onclick="window.location = `' . $loginUrl . '`;" value="Log In With Facebook" class="btn btn-primary">';
echo '</form>';

?>
