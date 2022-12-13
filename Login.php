<DOCTYPE>
<html>
    <head>
        <title >LogIn</title>
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="CSS/login.css">
    </head>

    <body>
        <div class="container">
                <div class="loginbox">
                <div class="row">
                    <div class="col-md-6 login-left">
                     <h2>Login Here</h2>
                     <form action="./php/validation.php" method="post">
                            <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="user" class="form-control" required>
                            </div>
                        <div class="form-group">
                            <label>Passsword</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>
            
             <div class="col-md-6 login-right">
                <h2>Register Here</h2>
                <form action="./php/registration.php" method="post">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="user" class="form-control" required>
                        <label>Email</label>
                            <input type="text" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Passsword</label>
                        <input type="password" name="passwordReg" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Register</button>
                </form>
            
               </div>
            
            </div>
        </div>
            
        </div>
    </body>

</html>