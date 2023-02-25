<?php
    // phpinfo(INFO_MODULES); //list all modules

    if(isset($_POST['login'])) {

        $connection = new mysqli( hostname: 'localhost', username: 'root', password: '', database: 'logintutorial');


        $email = $connection->real_escape_string($_POST['emailPHP']);
        // add md5 encryption to the password
        $password = md5($connection->real_escape_string($_POST['passwordPHP']));

        $data = $connection->query(query:"SELECT id FROM users WHERE email='$email' AND password='$password'");
        // check if there is more that one duplicate of the email and password combination
        if($data->num_rows > 0) {
            exit('success');
        } else {
            exit('failed');
        };

        exit($email . " = " . $password);

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jQuery Tutorial - Login Form</title>
</head>
<body>
    <form action="login.php" method="post">
        <input type="" id="email" placeholder="Please enter your email..."><br>
        <input type="password" id="password" placeholder="Password"><br>
        <input type="button" id="login" value="Log In">
    </form>

    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="./index.js"></script>
</body>
</html>