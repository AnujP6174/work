<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Vaccy Tours & Travels</title>

    <style type="text/css">
        #footer_nav {
            background-color: #333;
            overflow: hidden;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body>
    <header id="header">
        <!-- Navbar starts -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand">Vaccy Tours & Travels</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-3 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="packages">Packages</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="register">Register</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-danger" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
        <!-- Navbar Ends -->
    </header>


    <!-- slider starts-->
    <div id="carouselExampleIndicators" class="container my-4 md-4carousel slide mb-4" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="maldives.jpg" class="d-block w-100" alt="this is picture of maldives">
            </div>
            <div class="carousel-item">
                <img src="dubai.jpg" class="d-block w-100" alt="this is picture of dubai">
            </div>
            <div class="carousel-item">
                <img src="bali.jpg" class="d-block w-100" alt="this is picture of bali">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- slider ends-->


    <footer>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="footer_nav">
            <div class="container-fluid">
                <a class="navbar-brand">Vaccy Tours & Travels</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-3 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="packages">Packages</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="register">Register</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-danger" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </footer>
</body>

</html>