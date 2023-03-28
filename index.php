<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <link rel="stylesheet" href="bootstrap.min.css">
            <link href="css/styles0.css" rel="stylesheet" />
            <title>Connexion</title>
        </head>
        <body>
             
       

        <div class="login-form">
                         
            <form action="home.php" method="POST" id="myForm">
                <h2 class="text-center">Connexion</h2>       
                <div class="form-group">
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email"  >
                </div>
                <div class="form-group">
                    <input type="password" name="password" id="password" class="form-control" placeholder="Mot de passe"  autocomplete="off">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Connexion</button>
                </div> 
                
            </form>
        </div>
        
        <style>
            .login-form {

                width: 340px;
                margin: 50px auto;
                 margin-top: 10%;
            }
            .login-form form {
                margin-bottom: 15px;
                background: #f7f7f7;
                box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
                padding: 30px;
            }
            .login-form h2 {
                margin: 0 0 15px;
            }
            .form-control, .btn {
                min-height: 38px;
                border-radius: 2px;
            }
            .btn {        
                font-size: 15px;
                font-weight: bold;
            }
        </style>
        </body>
</html>