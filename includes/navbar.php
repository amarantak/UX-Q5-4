<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link href="https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css" rel="stylesheet" />
    <link rel="stylesheet" href="../css/style.css" />
    <title>Frontend Bootcamp</title>
</head>

<body>
    <!-- Navbar 1-->
    <nav class="navbar navbar-expand-lg bg-light navbar-light py-2 fixed-top">
        <div class="container">
            <a href="index.php" class="navbar-brand">Bookstore Logo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="input-group rounded searchbar justify-content-center">
                <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                <span class="input-group-text border-0" id="search-addon">
                    <i class="bi bi-search"></i>
                </span>
            </div>

            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="#learn" class="nav-link" data-bs-toggle="modal" data-bs-target="#login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="#register" class="nav-link" data-bs-toggle="modal" data-bs-target="#register">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar 2 -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light py-2">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="books.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Books
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="books.php">Action</a></li>
                            <li><a class="dropdown-item" href="books.php">Drama</a></li>
                            <li><a class="dropdown-item" href="books.php">Children</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="books.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            E-Books
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="books.php">Action</a></li>
                            <li><a class="dropdown-item" href="books.php">Drama</a></li>
                            <li><a class="dropdown-item" href="books.php">Children</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="template1.php">What's on</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="template1.php">Workshops</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="template2.php">Book Trading</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Modal 1 Login-->
    <div class="modal fade" id="login" tabindex="-1" aria-labelledby="loginLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginLabel">Login</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="lead">Access to your account</p>
                    <form>
                        <div class="mb-3">
                            <label for="email" class="col-form-label">Email:</label>
                            <input type="email" class="form-control" id="email" />
                        </div>
                        <div class="mb-3">
                            <label for="pwd" class="col-form-label">Password:</label>
                            <input type="pwd" class="form-control" id="password" />
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="button" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 2 Register-->
    <div class="modal fade" id="register" tabindex="-1" aria-labelledby="registerLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="registerLabel">Register</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="lead">Register here to be part of the Bookstore</p>
                    <form>
                        <div class="mb-3">
                            <label for="first-name" class="col-form-label">
                                First Name:
                            </label>
                            <input type="text" class="form-control" id="first-name" />
                        </div>
                        <div class="mb-3">
                            <label for="last-name" class="col-form-label">Last Name:</label>
                            <input type="text" class="form-control" id="last-name" />
                        </div>
                        <div class="mb-3">
                            <label for="email" class="col-form-label">Email:</label>
                            <input type="email" class="form-control" id="email" />
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="col-form-label">Phone:</label>
                            <input type="tel" class="form-control" id="phone" />
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="button" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>