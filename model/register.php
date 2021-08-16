<?php

$_name = $_POST['name'];
$_firstName = $_POST['first-name'];
$_lastName = $_POST['last-name'];
$_email = $_POST['email'];
$_phone = $_POST['phone'];
$_password = password_hash($_POST['password'], PASSWORD_DEFAULT, array("cos" => 12));
$_balance = $_POST['balance'];
$_accountNumber = $_POST['n-user'];

//Date
$_date = $_POST['date'];
$_registerInfo = "you are registered";


if(!empty($_name) && !empty($_firstName) && !empty($_lastName) && !empty($_email) && !empty($_phone) && !empty($_password))
{
    if(filter_var($_email, FILTER_VALIDATE_EMAIL))
    {
        if(strlen($_phone) == 10)
        {
            require('connectionDB.php');
            try
            {
    
    
                $_queryFirst = "SELECT * FROM users WHERE email=:e or phone=:p OR account_number=:an";
                
                $_resultFirst = $_connection->prepare($_queryFirst);
    
                $_resultFirst->bindValue(":e", $_email);
                $_resultFirst->bindValue(":p", $_phone);
                $_resultFirst->bindValue(":an", $_accountNumber);
    
                $_resultFirst->execute();
    
                if($_resultFirst->rowCount() > 0)
                {
                    echo "There is a account wit the self data";
                }
                else
                {
                    try {
                        
                        $_querySecond = "INSERT INTO users(name, first_name, last_name, email, phone, password, saldo, account_number) VALUES (:n, :fn, :ln, :e, :p, :ps, :s, :an)";
                        $_connection->exec("SET CHARACTER SET utf8");
                        $_resultSecond = $_connection->prepare($_querySecond);
                        $_resultSecond->bindValue(":n", $_name);
                        $_resultSecond->bindValue(":fn", $_firstName);
                        $_resultSecond->bindValue(":ln", $_lastName);
                        $_resultSecond->bindValue(":e", $_email);
                        $_resultSecond->bindValue(":p", $_phone);
                        $_resultSecond->bindValue(":ps", $_password);
                        $_resultSecond->bindValue(":s", $_balance);
                        $_resultSecond->bindValue(":an", $_accountNumber);
        
                        $_resultSecond->execute();
    
                        //set table history
                        $_queryThird = "SELECT * FROM users WHERE phone=:p";
                        $_resultThird = $_connection->prepare($_queryThird);
                        $_resultThird->bindValue(":p", $_phone);
                        $_resultThird->execute();
    
                        if($_resultThird->rowCount() > 0)
                        {
                            while($_row = $_resultThird->fetch(PDO::FETCH_ASSOC))
                            {
                                $_id = $_row['id'];
    
                                $_queryfourth = "INSERT INTO history(id, date, movement) VALUES (:i, :d, :m)";
                                $_resultFourth = $_connection->prepare($_queryfourth);
                                $_resultFourth->bindValue(':i', $_id);
                                $_resultFourth->bindValue(':d', $_date);
                                $_resultFourth->bindValue(':m', $_registerInfo);
                                $_resultFourth->execute(); 
                            }
                        }
                        echo "success";
         
                    } catch (Exception $_e) {
                        
                        die("ERROR.." . $_e->getMessage());
                    }
                }
    
            }
            catch(Exception $_e)
            {
                die("ERROR!." . $_e->getMessage());
            }
        }
        else
        {
            echo "Please, your phone number should only be 10 numbers in size";
        }
    }
    else
    {
        echo "Sorry, your email is not correct";
    }
}
else
{
    echo "you need complete all spaces";
}
?>