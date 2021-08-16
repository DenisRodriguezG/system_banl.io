<?php
$_id = $_POST['id'];
$_coment = $_POST['coment'];

if(!empty($_coment))
{
    try
    {
        require('../model/connectionDB.php');
        $_connection->exec('SET CHARACTER SET utf8');
        $_query = "INSERT INTO suggerens_users(id, suggerens) VALUES (:i, :s)";
        $_result = $_connection->prepare($_query);
        $_result->bindValue(':i', $_id);
        $_result->bindValue(':s', $_coment);
        $_result->execute();
        if($_result->rowCount())
        {
            header('Location: ../view/main.php');
        }
    }
    catch(Exception $_e)
    {
        die("ERROR..!" . $_e->getMessage());
    }
}
?>