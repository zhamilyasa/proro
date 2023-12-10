<?php
  session_start();

    require_once 'common/checkAuth.php';
    require_once 'common/connect.php';

    $categories = getCategories();

    $catId = $_GET['catId'] ?? null;

    if($catId)
        $posts = getPosts($catId);
    else
        $posts = getPosts();

?>
<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Personal - Start Bootstrap Theme</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Custom Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <style >
        body{
            margin-left: 50px;
            margin-right: 50px;
           justify-content: center;
        }
    </style>
</head>

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        <!-- Navigation-->
        <?php
        require_once 'common/nav.php';
        ?>
        <form action="homeworkPost.php" method="post">
            <div class="form-group">
            <label for="titleInput">Post title</label>
            <input name="title" type="text" class="form-control" id="titleInput">
        </div>
        <div class="form-group">
            <label for="contentInput">Post content</label>
            <textarea name="content" class="form-control" id="contentInput" rows="5"></textarea>
        </div>
        <div class="form-group">
            <label for="categoryInput">Example select</label>
            <select name="category_id" class="form-control" id="categoryInput">
                <?php foreach($categories as $cat): ?>
                    <option value="<?= $cat['id'] ?>"> <?= $cat['namekz'] ?> </option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group py-3">
            <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </form>
    </main>

    
</body>

</html>



