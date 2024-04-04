


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Login | GEOCARE</title>
    
</head>

<body>
<form action="" method="post">
    <h1 style="color: white; text-align: center; display: flex; justify-content: center; flex-direction : column;padding-top:2em;">SIGNUP to get quick services</h1>
    <div class="container">
        <div class="box">
            <div class="box-login" id="login">
                <div class="top-header">
                    <h3>Sign Up, Now</h3>
                </div>
                <div class="input-group">
                    <div class="input-field">
                        <input type="text" class="input-box" id="name" name="name" required>
                        <label for="name">User Name</label>
                    </div>
                    <div class="input-field">
                        <input type="text" class="input-box" id="email" name="email" required>
                        <label for="email">Email address</label>
                    </div>
                    <div class="input-field">
                        <input type="password" name="password" class="input-box" id="password" required>
                        <label for="password">Password</label>
                        <div class="eye-area">
                            <div class="eye-box" onclick="myLogPassword()">
                                <i class="fa-regular fa-eye" id="eye"></i>
                                <i class="fa-regular fa-eye-slash" id="eye-slash"></i>
                            </div>
                        </div>
                    </div>
                    <div class="input-field">
                        <input type="password" name="cpassword" class="input-box" id="cpassword" required>
                        <label for="cpassword">Confirm Password</label>
                        <div class="eye-area">
                            <div class="eye-box" onclick="myLogPassword()">
                                <i class="fa-regular fa-eye" id="eye"></i>
                                <i class="fa-regular fa-eye-slash" id="eye-slash"></i>
                            </div>
                        </div>
                    </div>
                    <div class="input-field">
                        
                        <input type="text" class="input-box" id="location" name="location" required>
                        <label for="location">location</label>
                    </div>
                    <div class="input-field">
                        <a href="login.php"><input type="submit" class="input-submit" value="Sign Up"><</a>
                    </div>
                    <div class="forgot">
                        <a href="login.php">have an account?</a>
                    </div>
                    </div>
                    </div>
                    
                </div>
            </div>
</form>
<script src="js/login.js"></script>

</body>

</html>