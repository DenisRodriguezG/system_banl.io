<?php
$_balance = $_POST['balance'];
$_user = $_POST['user'];

try
{
    require('../model/connectionDB.php');
    $_queryOne = "SELECT * FROM users WHERE phone=:p";
    $_resultOne = $_connection->prepare($_queryOne);
    $_resultOne->bindValue(':p', $_user);
    $_resultOne->execute();

    if($_resultOne->rowCount() > 0)
    {
        while($_row = $_resultOne->fetch(PDO::FETCH_ASSOC))
        {
            $_balanceUser = $_row['saldo'];
            if(intval($_balance) > intval($_balanceUser))
            {
                echo 'Sorry, insufficient money';
            }
            else
            {
                $_balanceRest = intval($_balanceUser) - intval($_balance);
                $_querySecond = 'UPDATE users SET saldo=:b WHERE phone=:p';
                $_resultSecond = $_connection->prepare($_querySecond);
                $_resultSecond->bindValue(':p', $_user);
                $_resultSecond->bindValue(':b', $_balanceRest);
                $_resultSecond->execute();
                echo 'success';
            }
        }
    }
}
catch(Exception $_e)
{
    die("ERROR--!" . $_e->getMessage());
}
?>