<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BANK MONEY</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/register.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body style="background: url('../img/register_img.jpg'); background-size: cover;">

<div class="back">
    <a href="../index.php">
    <i class="fas fa-arrow-circle-left"></i>
    </a>
</div>

<div class="container">
        <div class="information-to-user">
        </div>
        <form class="form-register">
            <div class="name">
                <label for="name">Name:</label>
                <input type="text" name="name" placeholder="Enter a name">
            </div>
            <div class="first-name">
                <label for="first-name">First name:</label>
                <input type="text" name="first-name" placeholder="Enter a first name">
            </div>
            <div class="last-name">
                <label for="last-name">Last name</label>
                <input type="text" name="last-name" placeholder="Enter a last name">
            </div>
            <div class="email">
                <label for="email">Email:</label>
                <input type="text" name="email" placeholder="Enter a email"> 
            </div>
            <div class="phone">
                <label for="Phone">Phone</label>
                <input type="text" name="phone" placeholder="Enter a phone number">
            </div>
            <div class="password">
                <label for="password">Password:</label>
                <input type="text" name="password" placeholder="Enter a password">
                <input type="text" name="n-user" class="n-user" hidden>
                <input type="text" name="balance" class="balance-user" value="2000" hidden>
                <input type="text" name="date" class="date" hidden>
            </div>
            <div class="save">
                <input type="submit" class="input-save" value="SAVE">
            </div>
        </form>
    </div>

    <script src="../model/register.js"></script>
</body>
</html>