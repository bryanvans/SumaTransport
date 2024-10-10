<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link rel="stylesheet" href="{{asset('css/Register.css')}}">
</head>
<body>
    <div class="header">
        <div class="SumaTransport">
            <h1>
                <span class="suma">Suma</span><span class="transport">Transport</span>
            </h1>
        </div>
        <nav class="navigation">
            <a href="beranda">Beranda</a>
            <a href="jadwal">Jadwal</a>
            <a href="rute">Rute</a>
            <a href="informasi-bus">Informasi Bus</a>
            <a href="qna">QnA</a>
            <div class="login-register-box">
                <a href="login">Login</a>/<a href="register">Register</a>
        </nav>
    </div>

    <hr class="hr">

    <div class="container">
        <div class="Register">
            <form action="">
                <h2>Register</h2>
                <input type="text" 
                       class="input"
                       name="email" 
                       placeholder="Alamat E-mail" 
                       required="required" />
                <input type="password" 
                       class="input"
                       name="password" 
                       placeholder="Password" 
                       required="required" />
                <input type="konfirmasi password" 
                       class="input"
                       name="konfirmasi password" 
                       placeholder="Konfirmasi Password" 
                       required="required" />
                <button type="submit" class="button">Daftar</button>
                <p class="p">Sudah punya akun? Login <a href="login">disini</a></p>
            </form>
        </div>
    </div>
</body>
</html>
