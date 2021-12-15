<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Packages that you love</title>

    <style type="text/css">
        body {
            background-image: url("dubai.jpg");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            min-height: 100vh;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .center {
            margin: auto;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: auto;
            background: #9CA1B2;
            border-radius: 10px;
            box-shadow: 10px 10px 15px rgba(0, 0, 0, 0.05);
        }

        .center h6 {
            padding: 20px 0;
            border-bottom: 1px solid silver;
        }

        .center h2 {
            padding: 5px;
        }

        .sidebar {
            opacity: 60%;
            background: #BBB4CD;
            position: fixed;
            left: 0;
            width: 200px;
            height: 100%;
        }

        .sidebar h4 {
            color: black;
            margin-top: 50px;
            margin-bottom: 20px;
        }

        .sidebar a {
            color: black;
            display: block;
            width: 100%;
            line-height: 60px;
            text-decoration: none;
            padding-left: 40px;
            box-sizing: border-box;
        }

        .sidebar a:hover {
            background: #BCF734;
        }

        .sidebar i {
            padding-right: 10px;
        }

        .card {
            margin: 10px;
        }

        .box-shadow {
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.8);
        }

        .container {
            padding-left: 15%;
        }
    </style>
</head>

<body>
    <!-- Sidebar start -->
    <div class="sidebar">
        <a href="home"><i class="fas fa-home"></i><span>Home</span></a>
        <a href="about"><i class="fas fa-address-card"></i><span>About Us</span></a>
        <a href="Register"><i class="fas fa-user-plus"></i><span>Register</span></a>
    </div>
    <!-- Sidebar ends -->

    <!-- packages cards starts -->
    <div class="container">
        <div class="row">
            <div class="col-sm-3 py-3 py-sm-0">
                <div class="card box-shadow">
                    <img src="maldives.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Maldives</h5>
                        <p class="card-text">Maldives is a very nice place with package of 1 week with beach-side resort.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 py-3 py-sm-0">
                <div class="card box-shadow">
                    <img src="dubai.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Dubai</h5>
                        <p class="card-text">Dubai is a very nice place with package of 1 week with beach-side resort.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 py-3 py-sm-0">
                <div class="card box-shadow">
                    <img src="thailand.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Thailand</h5>
                        <p class="card-text">Thailand is a very nice place with package of 1 week with beach-side resort.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 py-3 py-sm-0">
                <div class="card box-shadow">
                    <img src="singapore.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Singapore</h5>
                        <p class="card-text">Singapore is a very nice place with package of 1 week with beach-side resort.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- packages cards ends -->
</body>

</html>