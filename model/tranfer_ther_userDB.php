<?php
$_me = $_POST['me'];
$_user = $_POST['user'];
$_balance = $_POST['balance'];
$_date = $_POST['date'];
if(strlen($_user) == 16)
{
    try
    {
        require('../model/connectionDB.php');
        $_queryFirst = 'SELECT * FROM users WHERE phone = :p';
        $_resultFirst = $_connection->prepare($_queryFirst);
        $_resultFirst->bindValue(':p', $_me);
        $_resultFirst->execute();

        if($_resultFirst->rowCount() > 0)
        {
            while($_row = $_resultFirst->fetch(PDO::FETCH_ASSOC))
            {
                $_id = $_row['id'];
                $_mine = $_row['account_number'];
                $_balanceMine = $_row['saldo'];
            }
        }
        if($_user != $_mine)
        {
            if($_balance > $_balanceMine)
            {
                echo "You don't have enough money";
            }
            else
            {
            $_querySecond = 'SELECT * FROM users WHERE account_number = :an';
            $_resultSecond = $_connection->prepare($_querySecond);
            $_resultSecond->bindValue(':an', $_user);
            $_resultSecond->execute();

            if($_resultSecond->rowCount() > 0)
            {
                $_message = "you transferred " . $_balance . " to account " . $_user;
                $_msg = "You received " . $_balance . " from this account " . $_mine;

                while($_roww = $_resultSecond->fetch(PDO::FETCH_ASSOC))
                {
                    $_idd = $_roww['id'];
                    $_rowwNow = $_roww['saldo'];
                }
                $_balanceTotal = intval($_rowwNow) + intval($_balance);

                $_queryThird = 'UPDATE users SET saldo = :b WHERE account_number = :an';
                $_resultThird = $_connection->prepare($_queryThird);
                $_resultThird->bindValue(':b', $_balanceTotal);
                $_resultThird->bindValue(':an', $_user);
                $_resultThird->execute();

                $_balanceMineTotal = intval($_balanceMine) - intval($_balance);
                $_queryQuarter = 'UPDATE users SET saldo = :b WHERE phone = :p';
                $_resultQuarter = $_connection->prepare($_queryQuarter);
                $_resultQuarter->bindValue(':b', $_balanceMineTotal);
                $_resultQuarter->bindValue(':p', $_me);
                $_resultQuarter->execute();

                $_queryFith = 'INSERT INTO history(id, date, movement) VALUES (:i, :d, :m)';
                $_resultFith = $_connection->prepare($_queryFith);
                $_resultFith->bindValue(':i', $_id);
                $_resultFith->bindValue(':d', $_date);
                $_resultFith->bindValue(':m', $_message);
                $_resultFith->execute();

                $_querySixth = 'INSERT INTO history(id, date, movement) VALUES (:i, :d, :m)';
                $_resultSixth = $_connection->prepare($_querySixth);
                $_resultSixth->bindValue(':i', $_idd);
                $_resultSixth->bindValue(':d', $_date);
                $_resultSixth->bindValue(':m', $_msg);
                $_resultSixth->execute();

                echo'success';
            }
            else
            {
                echo 'Please, this account number is not correct';
            }
            }
        }
        else
        {
            echo 'Please, you need enter other account number';
        }
    }
    catch(Exception $_e)
    {
        die("ERROR..!" . $_e->getMessage());
    }
}
else
{
    echo 'Please, number card must to be of 16 size';
}
?>