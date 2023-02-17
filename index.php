<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="./assets/css/styles.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head class="d-flex flex-column min-vh-100">

<body class="d-flex flex-column min-vh-100">

    <?php

    session_start();
    $user = $_SESSION['user'] ?? null;
    ?>

    <nav class="navbar navbar-expand-lg bg-transparent mb-4 shadow-lg">
        <div class="container-fluid">
            <strong><a class="navbar-brand text-light" href="#">APP</a></strong>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 w-100">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <!-- SIGN IN AND SIGN UP LINKS -->
                    <li class="nav-item ms-auto" id="btnSignIn" <?php echo $user ? 'hidden' : '' ?>>
                        <a class="nav-link" href="/signin.php">Sign In</a>
                    </li>
                    <li class="nav-item" id="btnSignUp" <?php echo $user ? 'hidden' : '' ?>>
                        <a class="nav-link" href="/signup.php">Sign Up</a>
                    </li>

                    <!-- USER LOGGED AND LOGOUT -->
                    <li class="nav-item ms-auto" <?php echo $user ? '' : 'hidden' ?>>
                        <a class="nav-link disabled" href="#">
                            <?php echo $user['username'] ?>
                        </a>
                    </li>
                    <li class="nav-item" id="btnSignOut" <?php echo $user ? '' : 'hidden' ?>>
                        <a class="nav-link" href="/signout.php">Sign Out</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>



    <div class="col-10 mx-auto row animate__animated animate__fadeIn">
        <div class="col-4">
            <div class="card custom-card">
                <img src="https://upload.wikimedia.org/wikipedia/commons/1/14/No_Image_Available.jpg?20200913095930"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <div class="d-flex justify-content-center">
                        <a href="#" class="btn btn-custom">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card custom-card">
                <img src="https://upload.wikimedia.org/wikipedia/commons/1/14/No_Image_Available.jpg?20200913095930"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <div class="d-flex justify-content-center">
                        <a href="#" class="btn btn-custom">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card custom-card">
                <img src="https://upload.wikimedia.org/wikipedia/commons/1/14/No_Image_Available.jpg?20200913095930"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <div class="d-flex justify-content-center">
                        <a href="#" class="btn btn-custom">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="./index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>