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
    






        ?><!DOCTYPE html>
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
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <!-- Navigation-->
<?php
 require_once 'common/nav.php';


 ?>

                              
                                <div >
                                
                                    <img class="profile-img" src="5.png" width="50%" style="margin: 0 25%;"  alt="..." />
                                    
                                </div>
                            
                         <?php
                        include 'DB.php';
                        

                        
                        ?>
            <!-- Header-->
            <header class="py-5">
                <div class="container px-5 pb-5">
                    <div class="row gx-5 align-items-center">
                        <div class="col-xxl-5">
                            <!-- Header text content-->
                            <div class="text-center text-xxl-start">
                                <div class="badge bg-gradient-primary-to-secondary text-white mb-4"><div class="text-uppercase">Оқы  &middot; Дамы &middot; Maқсатқа жет</div></div>
                                <div class="fs-3 fw-light text-muted">Біз саған мақсатқа жетуге көмектесеміз</div>
                                <h1 class="display-3 fw-bolder mb-5"><span class="text-gradient d-inline">Margulan Maksatuly  Physics </span></h1>
                             
                                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mb-3">
                                    <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder" href="teoria.php?id=1" >Teoria</a>
                                    <a class="btn btn-outline-dark btn-lg px-5 py-3 fs-6 fw-bolder" href="praktika.php">Practice</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-7">
                            <!-- Header profile picture-->
                            <div class="d-flex justify-content-center mt-5 mt-xxl-0">
                                <div class="profile bg-gradient-primary-to-secondary">
                                
                                    <img class="profile-img" src="2.png" alt="..." />
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br><br><br><br><hr> <br><br><br><br><br>


                <div class="container px-5 pb-5">
                    <div class="row gx-5 align-items-center">
                        <div class="col-xxl-5">
                            <!-- Header text content-->
                            <div class="text-center text-xxl-start">
                                <div class="badge bg-gradient-primary-to-secondary text-white mb-4"><div class="text-uppercase">Оқы  &middot; Дамы &middot; Maқсатқа жет</div></div>
                                <div class="fs-3 fw-light text-muted">Әр жеткен жетістігіңізге қуан</div>
                                <h1 class="display-3 fw-bolder mb-5"><span class="text-gradient d-inline">Erkebulan Koshkarbai  Math </span></h1>
                             
                                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mb-3">
                                    <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder" href="teoria.php?id=2">Teoria</a>
                                    <a class="btn btn-outline-dark btn-lg px-5 py-3 fs-6 fw-bolder" href="praktika.php">Practice</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-7">
                            <!-- Header profile picture-->
                            <div class="d-flex justify-content-center mt-5 mt-xxl-0">
                                <div class="profile bg-gradient-primary-to-secondary">
                                
                                    <img class="profile-img" src="8.png" alt="..." />
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br><br><br><br><hr> <br><br><br><br><br>








                <div class="container px-5 pb-5">
                    <div class="row gx-5 align-items-center">
                        <div class="col-xxl-5">
                            <!-- Header text content-->
                            <div class="text-center text-xxl-start">
                                <div class="badge bg-gradient-primary-to-secondary text-white mb-4"><div class="text-uppercase">Оқы  &middot; Дамы &middot; Maқсатқа жет</div></div>
                                <div class="fs-3 fw-light text-muted">"Stay hungry, Stay foolish"</div>
                                <h1 class="display-3 fw-bolder mb-5"><span class="text-gradient d-inline">Asem Sansysbai   History </span></h1>
                             
                                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mb-3">
                                    <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder" href="teoria.php?id=3">Teoria</a>
                                    <a class="btn btn-outline-dark btn-lg px-5 py-3 fs-6 fw-bolder" href="praktika.php">Practice</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-7">
                            <!-- Header profile picture-->
                            <div class="d-flex justify-content-center mt-5 mt-xxl-0">
                                <div class="profile bg-gradient-primary-to-secondary">
                                
                                    <img class="profile-img" src="9.png" alt="..." />
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br><br><br><br><hr><br><br><br><br><br>








            </header>
            <!-- About Section-->
            <section class="bg-light py-5">
                <div class="container px-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-xxl-8">
                            <div class="text-center my-5">
                                <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">140</span></h2>
                                <p class="lead fw-light mb-4">Мықтылардың мықтысы бол!</p>
                                <p class="text-muted">ҰБТ-дағы жоғары балл - бұл күш-жігердің нәтижесі ғана емес, сонымен қатар сенің білімге деген адалдығыңның дәлелі. Топ университетте оқу мүмкіндігі басқалардың назарын аударып, оларды сенің жолыңмен жүруге шабыттандырады.</p>
                                <div class="d-flex justify-content-center fs-2 gap-4">
                                    <a class="text-gradient" href="#!"><i class="bi bi-twitter"></i></a>
                                    <a class="text-gradient" href="#!"><i class="bi bi-linkedin"></i></a>
                                    <a class="text-gradient" href="#!"><i class="bi bi-github"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!-- Footer-->
        <footer class="bg-white py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0">Copyright &copy; Your Website 2023</div></div>
                    <div class="col-auto">
                        <a class="small" href="#!">Privacy</a>
                        <span class="mx-1">&middot;</span>
                        <a class="small" href="#!">Terms</a>
                        <span class="mx-1">&middot;</span>
                        <a class="small" href="#!">Contact</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
