<?php
$_phone = $_POST['phone'];
$_password = $_POST['password'];

if(!empty($_phone) && !empty($_password))
{
    if(strlen($_phone) == 10)
    {
        try
        {
            require("connectionDB.php");

            $_queryOne = "SELECT * FROM users WHERE phone=:p";
            $_resultOne = $_connection->prepare($_queryOne);
            $_resultOne->bindValue(':p', $_phone);
            $_resultOne->execute();

            if($_resultOne->rowCount() > 0)
            {
                while($_row = $_resultOne->fetch(PDO::FETCH_ASSOC))
                {
                    if(password_verify($_password, $_row['password']))
                    {
                        session_start();
                        $_SESSION['phone'] = $_phone;
                        echo 'success';
                    }
                    else
                    {
                        echo 'Sorry, tha password is not correct';
                    }
                }
            }
            else
            {
                echo "Sorry, your account already exits";
            }

        }
        catch(Exception $_e)
        {
            die('ERROR..!' . $_e->getMessage());
        }
    }
    else
    {
        echo "Please, your phone number should only be 10 numbers in size";
    }
}
else
{
    echo "Please, you need complete all spaces";
}
?>