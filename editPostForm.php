<?php

    session_start();

    require_once 'common/checkAuth.php';
    require_once 'common/connect.php';

    $categories = getCategories();

    $postId = $_GET['post_id'] ?? null;

    if($postId)
        $post = getOnePost($postId);

    // if($post['uer_id'] != $user['id']){
    //     header("Location:home.php");
    //     // onsubmit="return confirm('you dont have license')";
    // }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        
        <?php require_once 'common/inhead.php'; ?>  
    </head>
    <body>
        <?php require_once 'common/nav.php' ?>
         
                    
    <form action="editPost.php" method="post">

        <input name="id" value="<?= $post['id'] ?>" type="hidden">

        <div class="form-group">
            <label for="titleInput">Post title</label>
            <input name="title" value="<?= $post['title'] ?>" type="text" class="form-control" id="titleInput">
        </div>
        <div class="form-group">
            <label for="contentInput">Post content</label>
            <textarea name="content" class="form-control" id="contentInput" rows="5"><?= $post['content'] ?></textarea>
        </div>
        <div class="form-group">
            <label for="categoryInput">Example select</label>
            <select name="category_id" class="form-control" id="categoryInput">
                <?php foreach($categories as $cat): ?>
                    <option <?php if($cat['id'] == $post['category_id']) echo 'selected' ?> value="<?= $cat['id'] ?>"> <?= $cat['namekz'] ?> </option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group py-3">
            <button type="submit" class="btn btn-primary">Edit</button>
        </div>
    </form>

                    
    </body>
</html>
