<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sign In Page</title>
</head>
<body>
    <div class="container">
        <div class="box form-box">
            <header>Sign in</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" required >
                </div>

                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password ">
                </div>
                <div class="field">
                    <input type="submit"name="submit" value="Sign in" class="btn" required >
                </div>
                <div class="links">
                    Dont have an account? <a href="register.php">Sign Up Now</a>
                </div>
            </form>
        </div>

    </div>
    
</body>
</html>
