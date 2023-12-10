
<?php

    session_start();

    require_once 'common/checkAdmin.php';
    require_once 'common/connect.php';



?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Homepage</title>
        <?php require_once 'common/inhead.php'; ?>
        <style>
            .card-body form {
                display: inline;
            }
        </style> 
    </head>
    <body>
        <?php require_once 'common/navAdmin.php' ?>
        
        <!-- Page content-->
        <div class="container py-4">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-12">
                    <!-- Nested row for non-featured blog posts-->
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>ADMIN CONTENT HERE</h1>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
