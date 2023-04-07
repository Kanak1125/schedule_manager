<!DOCTYPE html>
<html lang="en">
<<<<<<< HEAD
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href=".\css\style.css">
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            font-family: 'Poppins', sans-serif;
        }
        h2{
            padding: 15px;
            text-align: center;
        }
        form{
            width: 75vw;
        max-width: 500px;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 1px 1px 10px black;
        }
        .login-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        }
        .input{
            font-size: 1rem;

        }
        .btn{
            height: 52px;
            width: 200px;
            display: inline;
        }
    </style>
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
            <div class="btn">
                <center>
                <input type="submit" name="submit" value="login">
                </center>
            </div>
            
        </div>
        
    </form>
</div>
</body>
</html>
=======
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
  </head>
  <body>
    <form>
      <label for="username">Username</label><br />
      <input type="text" name="username" /><br /><br />
      <label for="password">Password</label><br />
      <input type="password" name="password" /><br /><br />
      <input type="submit" value="Login" /><br />
    </form>
  </body>
</html>
>>>>>>> 380e111b0c66db23d71ddd39516f775d96ca0101
