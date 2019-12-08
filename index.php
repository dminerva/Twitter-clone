<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Twitter clone</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="CSS/indexStyle.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col" id="left"></div>
        <div class="col" id="right">            
            <form id="loginForm" action="login.php" method="post">
                <div class="form-group">
                    <input type="email" class="form-control" name="username" id="username" placeholder="username" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" id="password" placeholder="password" required>
                </div>
                <div class="form-group">
                    <button class="btn btn-info" type="submit" class="btn btn-default">Log in</button>
                    <a href="">Forgot password</a>
                    <a href="">Signup</a>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>