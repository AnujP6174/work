<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="slider.css">
    <title>Vaccy Tours & Travels</title>
    <style type="text/css">
        #bottom_nav {
            background-color: #333;
            overflow: hidden;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        #top_nav {
            background-color: #333;
            overflow: hidden;
            /* position: fixed; */
            top: 0;
            width: 100%;
        }
    </style>
</head>

<body>
    <header>
        <!-- Navbar starts -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="top_nav">
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
    <div class="container slider">
        <figure>
            <div class="slide">
                <img src="maldives.jpg" alt="">
            </div>
            <div class="slide">
                <img src="dubai.jpg" alt="">
            </div>
            <div class="slide">
                <img src="thailand.jpg" alt="">
            </div>
            <div class="slide">
                <img src="singapore.jpg" alt="">
            </div>
        </figure>
    </div>
    <!-- slider ends-->


    <footer>
        <nav class="navbar navbar-expand-lg navbar-dark bg-transparent" id="bottom_nav">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-3 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" style="color:black" aria-current="page" href="home">Home</a>
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
                        <button class="btn btn-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </footer>
</body>

</html>