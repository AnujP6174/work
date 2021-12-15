<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Vaccy Tours & Travels</title>
</head>

<body>
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
                        <a class="nav-link" aria-current="page" href="home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="packages">Packages</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-danger" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- Navbar ends -->

    <div class="center my-4">
        <h2>Welcome To Vacy Tours & Travels</h2>
        <h2>Register Yourself</h2>
        <form method="POST">
            <div class="txt_field">
                <input type="text" name="Name" maxlength="40" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)" required>
                <span></span>
                <label>Enter Your Name</label>
            </div>
            <div class="txt_field">
                <input type="text" name="Email" required>
                <span></span>
                <label>Enter Your Email</label>
            </div>
            <div class="txt_field">
                <input type="tel" name="Mobile" maxlength="10" onkeypress="return (event.charCode > 47 && event.charCode < 58)" required>
                <span></span>
                <label>Enter Your Mobile No.</label>
            </div>
            <div class="txt_field">
                <input type="password" name="Password" maxlength="16" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32) || (event.charCode > 47 && event.charCode < 58)" required>
                <span></span>
                <label>Create Password(AlphaNumeric Only)</label>
            </div>
            <div>
                <input type="submit" name="signup" value="SignUp">
            </div>
            <div class="my-4">
            </div>
            <div class="container-fluid">
                <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $conn = new mysqli('localhost', 'root', '', 'tourism');
                    if ($conn->connect_error) {
                        echo "$conn->connect_error";
                        die("Connection Failed : " . $conn->connect_error);
                    } else {
                        // Creating connection for database
                        $full = $_POST['Name'];
                        $mobile = $_POST['Mobile'];
                        $email = $_POST['Email'];
                        $password = $_POST['Password'];
                        $pw_hash = password_hash($password, PASSWORD_DEFAULT);

                        $stmt = $conn->prepare("INSERT INTO `register_tb`(`Name`, `Email`, `Mobile`, `Password`) VALUES (?,?,?,?)");
                        $stmt->bind_param("ssss", $full, $email, $mobile, $pw_hash);
                        $execval = $stmt->execute();
                        echo '<div class="container-fluid alert alert-success alert-dismissible fade show" role="alert">
                        <center><strong>You are Registered Successfully!</strong></center>
                        </div>';
                        sleep(2);
                        $stmt->close();
                        $conn->close();
                    }
                }
                ?>
            </div>
        </form>
    </div>
</body>

</html>