<?php
require __DIR__ . '/repository.php';
require __DIR__ . '/../models/user.php';

class UserRepository extends Repository
{
    // get all users
    function getAllUsers()
    {
        try {
            $stmt = $this->connection->prepare("SELECT * FROM user");
            $stmt->execute();

            $stmt->setFetchMode(PDO::FETCH_CLASS, 'User');
            $articles = $stmt->fetchAll();

            return $articles;
        } catch (PDOException $e) {
            echo $e;
        }
    }

    function getUserById($emailaddress)
    {
        try {
            $stmt = $this->connection->prepare("SELECT * FROM user WHERE emailaddress = ?");
            $stmt->execute(array($emailaddress));

            $stmt->setFetchMode(PDO::FETCH_CLASS, 'User');
            // $user = $stmt->fetch();
            $user = $stmt->fetchAll();
            return $user;
        } catch (PDOException $e) {
            echo $e;
        }
    }

    // function getUserByIdForChange()
    // {
    //     try {
    //         $stmt = $this->connection->prepare("SELECT firstname, lastname, emailaddress, hashedpassword, favorite_holiday_destination FROM user WHERE emailaddress = ?");
    //         $stmt->execute(array('josroskam@hotmail.com'));

    //         $stmt->setFetchMode(PDO::FETCH_CLASS, 'User');
    //         $user = $stmt->fetch();
    //         // $user = $stmt->fetchAll();

    //         return $user;
    //     } catch (PDOException $e) {
    //         echo $e;
    //     }
    // }

    // insert a new user
    function insert($firstname, $lastname, $emailaddress, $password, $favorite_holiday_destination)
    {
        try {
            $stmt = $this->connection->prepare("INSERT INTO `user` ( `firstname`, `lastname`, `emailaddress`, `hashedpassword`, `favorite_holiday_destination`) VALUES (?,?,?,?,?)");

            $stmt->execute([$firstname, $lastname, $emailaddress, $password, $favorite_holiday_destination]);

        } catch (PDOException $e) {
            echo $e;
        }
    }

    function checkUserPassword($emailaddress, $password){
        try{
            $stmt = $this->connection->prepare('SELECT hashedpassword FROM user WHERE emailaddress = ?;');

            if(!$stmt->execute(array($emailaddress))){
                $stmt = null;
                // echo "statement failed";
                header('Location: /index.php?stmtfailed');
                exit();
            }

            $passwordHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $checkPassword = password_verify($password, $passwordHashed[0]["hashedpassword"]);

            if($checkPassword == false){
                $stmt = null;
                $bool = false;
                return $bool;
            }

            else if($checkPassword == true){
                $stmt = $this->connection->prepare('SELECT * FROM user WHERE emailaddress = ? AND hashedpassword = ?;');
                if(!$stmt->execute(array($emailaddress, $passwordHashed[0]["hashedpassword"]))){
                    $stmt = null;
                    exit();
                }

                if($stmt->rowCount() > 0){
                    $bool = true;
                    return $bool;
                }
                $bool = false;
                return $bool;
            }
        }
        catch(PDOException $e){
            echo $e;
        }       
    }
    

    // get single user to login
    function getUser($emailaddress, $password)
    {
        try{
            $stmt = $this->connection->prepare('SELECT hashedpassword FROM user WHERE emailaddress = ?;');

            if(!$stmt->execute(array($emailaddress))){
                $stmt = null;
                return false;
            }

            if($stmt->rowCount() == 0){
                $stmt == null;
                return false;
            }

            $passwordHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $checkPassword = password_verify($password, $passwordHashed[0]["hashedpassword"]);

            if($checkPassword == false){
                $stmt = null;
                return false;
            }

            else if($checkPassword == true){
                $stmt = $this->connection->prepare('SELECT * FROM user WHERE emailaddress = ? AND hashedpassword = ?;');
                if(!$stmt->execute(array($emailaddress, $passwordHashed[0]["hashedpassword"]))){
                    $stmt = null;
                    return false;
                }

                if($stmt->rowCount() == 0){
                    $stmt = null;
                    return false;
                }

                $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

                if(!isset($_SESSION)) 
                { 
                    session_start();                 
                }                 

                $_SESSION["firstname"] = $user[0]["firstname"];
                $_SESSION["email"] = $user[0]["emailaddress"];
                ?>
                <script>
                    window.location = '/feed';
                </script>
                <?php
                    $stmt = null;
                return true;
            }
        }
        catch(PDOException $e){
            echo $e;
        }        
    }

    // check user exists by emailaddress
    function checkUserExists($emailaddress)
    {
        try{
            $sql = "SELECT * FROM user WHERE emailaddress = :email";
            $stmt = $this->connection->prepare($sql);
            $stmt->execute(array(':email' => $emailaddress));
            
            if($stmt->rowCount() > 0)
                return false;
            return true;
        }
        catch(PDOException $e){
            echo $e;
        }        
    }

    function updateUser($firstname, $lastname, $password, $favorite_holiday_destination, $currentEmail){
        try {
            // $stmt = $this->connection->prepare("UPDATE user SET firstname = ?, lastname = ?, emailaddress = ?, hashedpassword = ?, favorite_holiday_destination = ? WHERE 'emailaddress' = 'josroskam@hotmail.com'");
            // $stmt->execute(array($firstname, $lastname, $emailaddress, $password, $favorite_holiday_destination));
            $sql = "UPDATE user SET firstname = ?, lastname = ?, hashedpassword = ?, favorite_holiday_destination = ? WHERE emailaddress = ?";
            $stmt= $this->connection->prepare($sql);
            $stmt->execute(array($firstname, $lastname, $password, $favorite_holiday_destination, $currentEmail));

            $rowCount = $stmt->rowCount();
            if ($rowCount > 0) {
                echo "Statement executed successfully. $rowCount rows affected.";

                $stmt->setFetchMode(PDO::FETCH_CLASS, 'User');
                $stmt->fetchAll();
            } else {
                echo "Statement failed to execute.";
            }

        } catch (PDOException $e) {
            echo $e;
        }
    }
}
