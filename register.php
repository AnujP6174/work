<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Vaccy Tours & Travels</title>
</head>

<body>
    <div class="center">
        <!-- <h2>Welcome To Vacy Tours & Travels</h2> -->
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