<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/bootstrap/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: Arial, sans-serif;
        line-height: 1.6;
        display: flex;
        flex-direction: column;
        min-height: 100vh;
    }

    header {
        background-color:rgb(255, 255, 255);
        color: white;
        padding: 1px;
        text-align: center;
    }

    main {
        flex: 1;
        padding: 2rem;
    }

    footer {
        background-color: #333;
        color: white;
        text-align: center;
        padding: 1rem;
        margin-top: auto;
    }
    a{
        color:rgb(93, 93, 93);
        text-decoration: none;
    }
    h2{
        text-decoration: none;
    }
    div{
        padding-left: 2px;
        padding-right: 2px;
    }
</style>

<body>

    <header>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">

            <div class="container-fluid">

                <a class="navbar-brand" href="#">
                    <i class="bi bi-house-fill" style="font-size: 50px; color: black;"></i>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse " id="navbarNav">

                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                        <li class="nav-item dropdown">

                            <a class="nav-link dropdown-toggle" href="#" id="homeDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Home
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="homeDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                            
                        </li>

                        <li class="nav-item dropdown">

                            <a class="nav-link dropdown-toggle" href="#" id="homeDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Listing
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="homeDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>

                        </li>

                        <li class="nav-item dropdown">

                            <a class="nav-link dropdown-toggle" href="#" id="homeDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Property
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="homeDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>

                        </li>

                        <li class="nav-item dropdown">

                            <a class="nav-link dropdown-toggle" href="#" id="homeDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Pages
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="homeDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>

                        </li>

                        <li class="nav-item dropdown">

                            <a class="nav-link dropdown-toggle" href="#" id="homeDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Blog
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="homeDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>

                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href="#">Contacts</a>
                        </li>

                    </ul>

                    <ul class="navbar-nav">

                        <li class="nav-item dropdown">

                            <a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-globe-americas-fill"></i> ENG
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="languageDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>

                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Sign in</a>
                        </li>

                        <li class="nav-item dropdown">

                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Utilisateur
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="userDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>

                        </li>

                        <li class="nav-item">
                            <img src="../assets/images/1.jpg" alt="" style="width: 50px; height: 50px; border-radius: 50%;">
                        </li>

                    </ul>

                </div>

            </div>

        </nav>

    </header>
    
    
    <main>
        <?php
            if (isset($_GET['p'])) {
                $pages = include $_GET['p'];
            } else {
                echo "Page not found.";
            }
        ?>
    </main>

    <footer>
        <p>Copyright Immobilier © 2025</p>
    </footer>
    
</body>

</html>