<?php

include('controler/connection.php');
session_start();

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = $conn->prepare("SELECT * FROM users WHERE USERNAME=:$username");
    $query->bindParam('username', $username, PDO::PARAM_STR);
    $query->execute();

    $result = $query->fetch(PDO::FETCH_ASSOC);

    if (!$result) {
        echo '<p class="error">Username password combination is wrong!</p>';
    } else {
        if (password_verify($password, $result['PASSWORD'])) {
            $_SESSION['user_id'] = $result['ID'];
            echo '<p class="success">Congratulations, you are logged in!</p>';
        } else {
            echo '<p class="error">Username password combination is wrong!</p>';
        }
    }
}

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" action="" name="signin-form">
    <div class="form-element">
        <label>Username</label>
        <input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
    </div>
    <div class="form-element">
        <label>Password</label>
        <input type="password" name="password" required />
    </div>
    <button type="submit" name="login" value="login">Log In</button>
</form>
</body>
<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    body {
        margin: 50px auto;
        text-align: center;
        width: 800px;
    }

    h1 {
        font-family: 'Passion One';
        font-size: 2rem;
        text-transform: uppercase;
    }

    label {
        width: 150px;
        display: inline-block;
        text-align: left;
        font-size: 1.5rem;
        font-family: 'Lato';
    }

    input {
        border: 2px solid #ccc;
        font-size: 1.5rem;
        font-weight: 100;
        font-family: 'Lato';
        padding: 10px;
    }

    form {
        margin: 25px auto;
        padding: 20px;
        border: 5px solid #ccc;
        width: 500px;
        background: #eee;
    }

    div.form-element {
        margin: 20px 0;
    }

    button {
        padding: 10px;
        font-size: 1.5rem;
        font-family: 'Lato';
        font-weight: 100;
        background: yellowgreen;
        color: white;
        border: none;
    }

    p.success,
    p.error {
        color: white;
        font-family: lato;
        background: yellowgreen;
        display: inline-block;
        padding: 2px 10px;
    }

    p.error {
        background: orangered;
    }
</style>
</html>