<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
          crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>LoginUser</title>
</head>
<body>
<div id="register">
    <h3 class="text-center text-white pt-5">register</h3>

    <div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div id="login-box" class="col-md-12">


                    <form action="register.php"id="login-form"method="post" class="form">
                        <h3 class="txt-center text-info">Signup</h3>
                        <div class="form-group">


                            <label for="username" class="text-info">USERNAME</label>
                            <input type="text" name="username"  id="username"class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email" class="text-info">EMAIL</label>
                            <input type="text" name="email"  id="email"class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="tel" class="text-info">PHONE</label>
                            <input type="tel" name="phonenumber"  id="phonenumber"class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password" class="text-info">PASSWORD</label>
                            <input type="password" name="password"  id="password"class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                        </div>
                        <div id="reg_link" class="text-right">
                            <a href="login.php" class="text-info">GO TO LOGIN</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>