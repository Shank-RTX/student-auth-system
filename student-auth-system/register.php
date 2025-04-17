<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sign Up Page</title>
</head>
<body>
    <div class="container">
        <div class="box form-box">
            <header>Sign Up</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="username">Name</label>
                    <input type="text" name="username" id="username" required >
                </div>
                <div class="field input">
                    <label for="user-surname">Surname</label>
                    <input type="text" name="user-surname" id="user-surname" required >
                </div>
                <div class="field input">
                    <label for="user-Sudent-no">  Student Number</label>
                    <input type="number" name="user-Sudent-no" id="user-Sudent-no" required >
                </div>
                <div class="field input">
                    <label for="user-contact">Contact</label>
                    <input type="tel" name="user-contact" id="user-contact" required >
                </div>
                <div class="field input">
                    <label for="user-module-code">  Module Code</label>
                    <input type="text" name="user-module-code" id="user-module-code" required >
                </div>
                <div class="field input">
                    <label for="user-email">Email</label>
                    <input type="email" name="user-email" id="user-email" required >
                </div>
                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password " required>
                </div>
                <div class="field input">
                    <label for="confirm-password">Confirm Password</label>
                    <input type="password" name="confirm-password" id="confirm-password" required>
                </div>
                <div class="field">
                    <input type="submit"name="submit" value="Sign up" class="btn" required >
                </div>
                <div class="links">
                    Already have an account? <a href="index.php">Sign in</a>
                </div>
            </form>
        </div>

    </div>
    
</body>
</html>
