<!DOCTYPE html>
<html lang= "en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <div class ="SumaTransport">
        <h1>
            <span class="suma">Suma</span><span class="transport">Transport</span>
        </h1>
        <hr class="hr">
    </div>

    <div class="container">
        <div class="login">
            <form action="">
                <h2>Login</h2>
                <input type="text" 
                       class ="input"
                       name="email" 
                       placeholder="Alamat E-mail" 
                       required="required" />
                <input type="password" 
                       class = "input"
                       name="password" 
                       placeholder="Password" 
                       required="required" />
                <button type="submit"  class="button">Login</button>
                <p class = "p">Belum punya akun? Daftar sekarang <a href="register">disini</a></p>
            </form>
        </div>
    </div>
</body>
</html>