<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BANK MONEY</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="container">
        <div class="error">
        </div>
       <h1>WELCOME</h1>
       <div class="logo">
       </div>
          <div class="sub-container">
    <form class="form-login">
    <div class="info-user">
    <div>
    <label for="phone">Phone number:</label>
    <input type="text" name="phone" class="phone" placeholder="Enter a phone">
    </div>
    <div>
    <label for="password">Password:</label>
    <input type="password" name="password" placeholder="Enter password">
    </div>
    <div class="enter">
        <input type="submit" class="btn-login" value="LOGIN">
    </div>
    <div class="info">
        <p>do you have not a account?<a href="view/register.php">touch here</a></p>
    </div>
    </div>

    </form>
            </div>
    </div>
    <script src="./model/login.js"></script>
</body>
</html>