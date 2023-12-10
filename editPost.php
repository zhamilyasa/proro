<?php

	session_start();

	require_once 'common/checkAuth.php';

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$id = $_POST['id'];
		$title = $_POST['title'];
		$content = $_POST['content'];
		$category_id = $_POST['category_id'];

		$user_id = $user['id'];

		require_once 'common/connect.php';
		$result = editPost($id, $title, $content, $category_id);

		if($result)
			header("Location: profile.php");

	}

?>