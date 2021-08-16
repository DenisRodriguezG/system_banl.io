<?php
session_start();
if(!isset($_SESSION['phone']))
{
    header('location:../index.php');
}
try
{
    require('../model/connectionDB.php');
    $_connection->exec("SET CHARACTER SET utf8");
    $_queryOne = "SELECT * FROM users WHERE phone=:p";
    $_resultOne = $_connection->prepare($_queryOne);
    $_resultOne->bindValue(":p", $_SESSION['phone']);
    $_resultOne->execute();

    if($_resultOne->rowCount() > 0)
    {
        while($_row = $_resultOne->fetch(PDO::FETCH_ASSOC))
        {
            $_id = $_row['id'];
            $_name = $_row['name'];
            $_firstName = $_row['first_name'];
            $_lastName = $_row['last_name'];
            $_balance = $_row['saldo'];
            $_nCard = $_row['account_number'];
        }
    }
}
catch(Exception $_e)
{
    die ("ERROR...!" . $_e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>main</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <div class="company-info">
        <div class="logo-company">
            <img src="../img/logo.jpg" alt="">
        </div>
            <div class="company-email">uriaselyuyo@gmail.com</div>
        </div>
        <div class="options">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </header>
    <nav class="nav">
        <ul>
            <li>
                <a href="#home">Home</a>
            </li>
            <li>
                <a href="#withdrawals">Withdrawals</a>
            </li>
            <li>
                <a href="#transfer">Transfer</a>
            </li>
            <li>
                <a href="#history">History</a>
            </li>
            <li>
                <a href="#contact">Contact</a>
            </li>
            <li>
                <a href="../model/logout.php">Logout</a>
            </li>
        </ul>
    </nav>
<main>
    <section id="home" class="balance">
        <div class="user-information">
            <div class="user">
                <h2>
                    <?php echo $_name . " " . $_firstName . " " . $_lastName; ?>
                </h2>
                <h3>Number card</h3>
                <p><?php echo $_nCard; ?></p>
            </div>
            <div class="balance-user">
                <h3>Money balance</h3>
                <p><?php echo $_balance; ?></p>
            </div>
        </div>
    </section>
    <section class="withdrawals-container" id="withdrawals">
        <div class="withdrawals">
        <div class="message">
        </div>
        <form class="withdrawals-user">
            <h2>Please enter the amount</h2>
            <input type="text" name="user" value="<?php echo $_SESSION['phone'] ?>" hidden>
            <input type="text" name="balance" class="money-withdrawals">
            <button class="btn-withdrawals">Continue</button>
        </form>
            <h2>How much do you want to withdraw?</h2>
            <div class="money-inside">
                <p class="amount">$100</p>
                <p class="amount">$300</p>
                <p class="amount">$600</p>
                <p class="amount">$900</p>
                <p class="amount">$1000</p>
                <p class="amount">$1300</p>
                <p class="amount">$1600</p>
                <p class="amount">$2000</p>
                <p class="choose-amount">Other amount</p>
            </div>
            <div class="continue">
                <button class="btn-continue">Continue</button>
            </div>
        </div>
        <form class="choose-form">
            <input type="text" name="user" value="<?php echo $_SESSION['phone']; ?>" hidden>
            <input type="text" name="balance" class="balance-DB" value="0" hidden/>
        </form>
    </section>
    <section class="transfer" id="transfer">
        <h2>Transfer</h2>
        <div class="container-transfer">
            <form class="form-transfer">
                <div class="message-transfer">
                </div>
                <input type="text" name="me" value="<?php echo $_SESSION['phone']; ?>" hidden/>
                <label for="">Enter number of card</label>
                <input type="text" name="user">
                <label for="">Enter amount to transfer</label>
                <input type="text" name="balance">
                <input type="text" name="date" class="date" hidden/>
                <button class="btn-transfer">Send</button>
            </form>
        </div>
    </section>
    <section class="container-history" id="history">
        <div class="sub-container">
            <?php
            try
            {
                require('../model/connectionDB.php');
                $_querySecond = "SELECT * FROM history WHERE id = :m";
                $_resultSecond = $_connection->prepare($_querySecond);
                $_resultSecond->bindValue(':m', $_id);
                $_resultSecond->execute();

                if($_resultSecond->rowCount() > 0)
                {
                    echo "<div class='movement'>";
                    echo "<h2>movement you made</h2>";
                    echo "<div class='sub'>";
                    while($_row2 = $_resultSecond->fetch(PDO::FETCH_ASSOC))
                    {
                        echo "<div><p><b>" . $_row2['movement'] . "</b></p>";
                        echo "<p style='margin-bottom: 10px;'>" . $_row2['date'] . "</p></div>";
                    }
                    echo "</div>";
                    echo "</div>";
                }
            }
            catch(Exception $_e)
            {
                die('ERROR..!' . $_e->gtMessage());
            }
            ?>
        </div>
    </section>
</main>
<footer id="contact">
    <div class="container-footer">
        <div class="info-footer">
            <div>
            <div class="img">
                <img src="../img/logo.jpg" alt="">
            </div>
            <div class="about">
                <h3>About we</h3>
                <p><b>Location</b>: Fraccionamiento Villas Otoch Cancún.</p>
                <p><b>Founder</b>: Denis Urías Rodríguez García.</p>
                <p><b>Name Bank</b>: UJATBank</p>
                <p><b>Date</b>: 10/17/1999</p>
            </div>
            <div class="networks">
                <i class="fab fa-facebook"></i>
                <i class="fab fa-instagram-square"></i>
                <i class="fab fa-twitter-square"></i>
                <i class="fab fa-linkedin"></i>
                <i class="fab fa-whatsapp-square"></i>
            </div>
            </div>
        </div>
        <div class="seggerens">
            <h2>Give me a suggerens</h2>
            <form method="post" action="../model/suggerensDB.php" class="suggerens-form">
                <textarea name="coment" cols="30" rows="10"></textarea>
                 <input type="text" name="id" value="<?php echo $_id; ?>" hidden/>
                <button>Send</button>
            </form>
        </div>
    </div>
</footer>
<script src="../interactivity/main.js"></script>
<script src="../model/tranfer_other_user.js"></script>
</body>
</html>