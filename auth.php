<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GYM DAW</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="hero">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Log In</button>
                <button type="button" class="toggle-btn" onclick="register()">Register</button>    
            </div>
            <form action="includes/login.inc.php"method="post" id="login" class="input-group">
                <input type="text" name="uid" class="input-field" placeholder="Username" required>
                <input type="password" name="pwd" class="input-field" placeholder="Password" required>
                <button type="submit" name="submit" class="submit-btn">Log in</button>
            </form>
            <form action="includes/signup.inc.php"method="post" id="register" class="input-group">
                <input type="text" name="uid" class="input-field" placeholder="Username" required>
                <input type="password" name="pwd" class="input-field" placeholder="Password" required>
                <input type="password" name="pwdrepeat" class="input-field" placeholder="Repeat Password" required>
                <button type="submit" name="submit" class="submit-btn">Register</button>
            </form>
        </div>
    </div>
    <script>
    var x = document.getElementById("login");
    var y = document.getElementById("register");
    var z = document.getElementById("btn");

    function register(){
        x.style.left = "-400px";
        y.style.left = "50px";
        z.style.left = "110px";
    }
    function login(){
        x.style.left = "50px";
        y.style.left = "450px";
        z.style.left = "0px";
    }
    </script>
</body>
</html>