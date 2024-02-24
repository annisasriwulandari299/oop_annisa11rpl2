<?php

$email = @$_REQUEST ['email'];
$password = @$_REQUEST ['password'];

if ($email !== 'sriwulandaannisa5@gmail.com') {
    die ("Email tidak terdaftar");
}

if ($password !=='12345678') {
    die ("Password salah");
}
 
# jika lolos alias email dan password n ya benar

echo "selamat {@email), anda berhasil login! :)";