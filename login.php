<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/login.css">
    
</head>
<body>
    <div class="login-container">
    <form action="">
        
        <h2>Login</h2>
       

        <div class="input">
            <label for="uname">Username :</label>
            <input type="text" name="uname" class="uname"><br><br>
            <label for="password">Password :</label> 
            <input type="password" name="password" class="password"><br><br>
            <label for="email">Email :</label>
            <input type="email" name="email" class="email"><br><br>
            <div>
                <span>forget password</span>
            </div>
            <div class="btn">
                <center>
                <input type="submit" name="submit" value="login">
                </center>
            </div>
            <div class="signup">
                <span>Not a member</span><a href="signup.php">signup</a>
            </div>
            
        </div>
        
    </form>
</div>
</body>
</html>

