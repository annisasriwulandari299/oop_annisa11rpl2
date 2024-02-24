<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <div>
            <label>Email</label> <br>
            <input name="email" type="email" placeholder="masukan email">
        </div>
        <div>
            <label>Kata sandi</label> <br>
            <input name="email" type="password" placeholder="masukan kata sandi">
        </div>    
        <div>
            <button>submit</button>
        </div>
    </form>
</body>
</html>

<?php

$email = @$_POST ['email'];
$password = @$_POST ['password'];

if ($email) {
    echo "<strong>Email:</strong> {$email} <br>";
}

if ($password) {
    echo "<strong>kata sandi:</strong> {$password} <br>";
}

?>