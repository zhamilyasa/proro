 <?php
         session_start();

    require_once 'common/checkAuth.php';
    require_once 'common/connect.php';

    $categories = getCategories();

    $catId = $_GET['cat_id'] ?? null;

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
        <meta name="description" content />
        <meta name="author" content />
        <title>profile</title>
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
        <style>
            body {
    background: rgb(99, 39, 120)
}

.form-control:focus {
    box-shadow: none;
    border-color: #BA68C8;
   border-bottom: 1 px solid red;
}

.profile-button {
    background: rgb(99, 39, 120);
    box-shadow: none;
    border: none
}

.profile-button:hover {
    background: #682773
}

.profile-button:focus {
    background: #682773;
    box-shadow: none
}

.profile-button:active {
    background: #682773;
    box-shadow: none
}

.back:hover {
    color: #682773;
    cursor: pointer
}

.labels {
    font-size: 11px
}

.add-experience:hover {
    background: #BA68C8;
    color: #fff;
    cursor: pointer;
    border: solid 1px #BA68C8
}
        </style>
    </head>
    <body class="d-flex flex-column">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <?php
            require_once 'common/nav.php';
          ?>
            <!-- Page content-->
            <section class="py-5">
                <div class="container px-5">
                    <!-- Contact form-->
                    <div class="bg-light rounded-4 py-5 px-4 px-md-5">
                        <div class="text-center mb-5">
                            <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                            <h1 class="fw-bolder">Анкета</h1>
                            <p class="lead fw-normal text-muted mb-0">Let's get better!</p>
                        </div>
                        <div class="row gx-5 justify-content-center">
                            <div class="col-lg-8 col-xl-6">
                               <div class="container rounded bg-white mt-5 mb-5">
                                <div class="row">
                                    <?php $users = $_SESSION['user']; ?>
                                    <div class="col-md-3 border-right">
                                        <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                                            <img class="rounded-circle mt-5" width="150px" src="http://localhost/math/images/avatars/<?=$users['avatar'];?> "  alt="Avatar" class="avatar">
                                            <span class="font-weight-bold"><?=$users['name'];?></span>
                                            <span class="text-black-50"><?= $users['email'];  ?></span> 
                                        </div>
                                    </div>
                                    <div class="col-md-5 border-right">
                                        <div class="p-3 py-5">
                                            <div class="d-flex justify-content-between align-items-center mb-3">
                                                <h4 class="text-right">Profile Settings</h4>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col-md-6">
                                                    <label class="labels">Name</label>
                                                    <p class="form-control"><?=$users['name'];?></p>
                                                </div>
                                               
                                            </div>
                                           
                                           
                                            <div class="mt-5 text-center">
                                                <button class="btn btn-primary profile-button" type="button"><a class="nav-link" href="changePassword.php">new password</a></button>
                                            </div>

                                             <div class="mt-5 text-center">
                                                <button class="btn btn-primary profile-button" type="button"><a class="nav-link" href="logOut.php">logOut</a></button>
                                            </div>
                                        </div>
                                    </div>
                                   </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="py-5">
                <div class="container px-4">
                        <!-- Contact form-->
                        <div class="bg-light rounded-4 py-5 px-4 px-md-5">
                            <div class="text-center mb-5">
                                
                                <h1 class="fw-bolder">Үй жұмысы</h1>
                                <p class="lead fw-normal text-muted mb-0">Сіздің жұмысыңыз!</p>
                            </div>
                            <div class="row gx-5 justify-content-center">
                                <div class="col-lg-8 col-xl-6">
                                   <div class="container rounded bg-white mt-5 mb-5">
                                        <div class="row">
                                            <div class="col-lg-12 mx-auto">
                                                
                                                <?php foreach($posts as $post): ?>
                                                
                                                <div class="card mb-4">
                                                    <a href="#!"><img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" alt="..." /></a>
                                                    <div class="card-body">
                                                        <div class="small text-muted"><?= $post['created_at'] ?></div>
                                                        <h2 class="card-title h4"><?= $post['title'] ?></h2>
                                                        <p class="card-text"><?= $post['content'] ?></p>
                                                        <a class="btn btn-outline-success" href="onePost.php?post_id=<?= $post['id'] ?>">check</a>
                                                        <a class="btn btn-outline-success" href="editPostForm.php?post_id=<?= $post['id'] ?>">edit</a>
                                                        <form onsubmit="return confirm('Really want to delete?')" action="deletePost.php" method="post">
                                                            <input type="hidden" name="post_id" value="<?= $post['id']?>">
                                                            <button class="btn btn-outline-danger" type="submit"> delete</button>
                                                        </form>
                                                    </div>
                                                    
                                                </div>
                                                
                                                 <?php endforeach; ?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
    </body>
</html>
