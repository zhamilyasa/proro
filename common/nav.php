<!-- Responsive navbar-->
 

        <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
                <div class="container px-5">
                    <a class="navbar-brand" href="#"><span class="fw-bolder text-primary">Start MegaMath</span></a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                            <li class="nav-item"><a class="nav-link" href="home.php">HOME</a></li>
                            <li class="nav-item"><a class="nav-link" href="teoria.php">TEORIA</a></li>
                            <li class="nav-item"><a class="nav-link" href="praktika.php">PRAKTIKA</a></li>
                            <li class="nav-item"><a class="nav-link" href="profile.php">PROFILE</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Categories</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <?php foreach($categories as $cat):  ?>
                                    <li><a href="home.php?catId=<?= $cat['id'] ?>"><?= $cat['namekz'] ?></a></li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>