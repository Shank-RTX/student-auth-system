<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Update Profile</title>
</head>
<body>
    <div class="nav">
        <div class="logo">
            <p><a href="home.php">Home</a></p>
        </div>
        <div class="right-links">
            <a href="#">Change Profile</a>
            <a href="logout.php"><button class="btn">Sign Out</button></a>
        </div>
    </div>  
    <div class="container">
        <div class="box form-box">
            <header>Update Profile</header>
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
                <div class="field">
                    <input type="submit"name="submit" value="Update" class="btn" required >
                </div>
            </form>
        </div>

    </div>
</body>
</html>