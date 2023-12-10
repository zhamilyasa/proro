



<?php

	session_start();
    require_once 'common/checkauth.php';
     require_once 'common/connect.php';
     

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
		
		$title = $_POST['title'];
		$content = $_POST['content'];
		$category_id = $_POST['category_id'];

		$user_id = $user['id'];

		require_once 'common/connect.php';
		$result = createPost($title, $content, $category_id, $user_id);

		if($result)
			header("Location:home.php");

	}

?>
