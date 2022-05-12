<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8>
        <meta name= "viewport content="width=device-wdith, initial-scale=1.0">
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css".>
        <link rel="stylesheet" type="text/css" href="css/style.css">

        <title>Login</title>
    </head>
    <body>
    
        <div class="container">
            <form action="" method="POST" class="login-email">
                @csrf
                <p class="login-text" style="font-size: 2rem; font-weigth: 800;">Register</p>
                <div class="input group">
                    <input type="text" placeholder="Username" name="username" value="" required>
                </div>
                
                <div class="input group">
                    <input type="password" placeholder="Password" name="password" value="" required>
                </div>
                
                <div class="input group">
                    <button name="submit" class="btn">Register</button>
                </div>
                <p class="login-register-text">Anda sudah punya akun? <a href="/login.php">Login</a></p>
            </form>
        </div>
    </body>
    
                


</html>
