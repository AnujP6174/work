<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    session_start();
    $conn = mysqli_connect("localhost", "root", "", "tourism");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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
                    // Creating connection for database
                    $conn = mysqli_connect("localhost", "root", "", "tourism");
                    $full = $_POST['Name'];
                    $mobile = $_POST['Mobile'];
                    $email = $_POST['Email'];
                    $password = $_POST['Password'];
                    $pw_hash = password_hash($password, PASSWORD_DEFAULT);

                    $check_email_query = "SELECT Email FROM `register_tb` WHERE Email=$email";
                    $check_email_result = mysqli_query($conn, $check_email_query) or die(mysqli_error($conn));
                    $check_email_count = mysqli_num_rows($check_email_result);
                    if ($check_email_count == 0) {
                        $insert_info_db_query = "INSERT INTO `register_tb`(`Sr. No.`, `Name`, `Email`, `Mobile`, `Password`) VALUES (1,'$full','$email','$mobile','$pw_hash')";
                        $insert_info_db_query_execute = mysqli_query($conn, $insert_info_db_query) or die(mysqli_error($conn));
                        echo '<div class="container-fluid alert alert-success alert-dismissible fade show" role="alert">
                        <center><strong>You are Registered Successfully!</strong></center>
                        </div>';
                        sleep(2);
                    } else {
                        echo '<div class="container-fluid alert alert-danger alert-dismissible fade show" role="alert">
                        <center><strong>You are Already Registered!</strong></center>
                        </div>';
                    }
                }
                ?>
            </div>
        </form>
    </div>
</body>

</html>