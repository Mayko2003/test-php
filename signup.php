<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>

    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">


    <link rel="stylesheet" href="./assets/css/styles.css">
</head>

<body class="d-flex flex-column min-vh-100">


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
                    <li class="nav-item" <?php echo $user ? '' : 'hidden' ?>>
                        <a class="nav-link" href="#" disabled><?php echo $user['username'] ?></a>
                    </li>
                    <li class="nav-item" id="btnSignOut" <?php echo $user ? '' : 'hidden' ?>>
                        <a class="nav-link" href="/signout.php">Sign Out</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <form action="./login.php?action=signup" method="post" class="col-8 mx-auto mt-5 animate__animated animate__fadeIn">
        <div class="d-flex justify-content-center mb-4">
            <h1>Sign Up</h1>
        </div>
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Input your username">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Input your password">
        </div>
        <div class="d-flex justify-content-center mb-3">
            <button class="btn btn-custom" type="submit">Sign Up</button>
        </div>
        <div class="alert alert-danger" role="alert" <?php echo $_GET['error'] ? '' : 'hidden' ?>>
            <?php
            if ($_GET['error']) {
                switch ($_GET['error']) {
                    case 1:
                        echo 'User already exists';
                        break;
                    case 2:
                        echo 'Something went wrong';
                        break;
                    default:
                        # code...
                        break;
                }
            }
            ?>
        </div>
    </form>



    <script src="./index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>