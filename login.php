<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
        $email_id = $_POST['email'];
        $password = $_POST['password'];

		if(!empty($user_name) && !empty($email_id) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from user where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}
		else
		{
			echo "wrong username or password!";
		}
	}

?>

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
    <h1 style="color: white; text-align: center; display: flex; justify-content: center; flex-direction : column;padding-top:2em; ">LOGIN to avail our services</h1>
    <div class="container">
        <div class="box">
            <!------------------ Login Box --------------------->
            <div class="box-login" id="login">

                <div class="top-header">
                    <h3>Hello, Again</h3>
                    <small>We are happy to have you back.</small>
                </div>
                <div class="input-group">
                    <div class="input-field">
                        <input type="text" class="input-box" id="logUser" required>
                        <label for="logUser">User Name</label>
                    </div>
                    <div class="input-field">
                        <input type="text" class="input-box" id="logEmail" required>
                        <label for="logEmail">Email address</label>
                    </div>
                    <div class="input-field">
                        <input type="password" class="input-box" id="logPassword" required>
                        <label for="logPassword">Password</label>
                        <div class="eye-area">
                            <div class="eye-box" onclick="myLogPassword()">
                                <i class="fa-regular fa-eye" id="eye"></i>
                                <i class="fa-regular fa-eye-slash" id="eye-slash"></i>
                            </div>
                        </div>
                    </div>
                    <div class="remember">
                        <input type="checkbox" id="formCheck" class="check" required>
                        <label for="formCheck"> Remember Me</label>
                    </div>
                    <div class="input-field">
                        <a href="index.php"><input type="submit" class="input-submit" value="Log In"></a>
                    </div>
                    <div class="forgot">
                        <a href="signup.php">Don't have an account</a>
                    </div>
                </div>

            </div>
        <div>
</div>

<script src="js/login.js"></script>
</body>

</html>