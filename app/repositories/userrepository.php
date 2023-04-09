<?php
require __DIR__ . '/repository.php';
require __DIR__ . '/../models/user.php';

class UserRepository extends Repository
{
    function getUserById($emailaddress)
    {
        try {
            $stmt = $this->connection->prepare("SELECT user_id, firstname, lastname, emailaddress, hashedpassword, favorite_holiday_destination FROM user WHERE emailaddress = ?");
            $stmt->execute(array($emailaddress));

            $stmt->setFetchMode(PDO::FETCH_CLASS, 'User');
            // $user = $stmt->fetch();
            $user = $stmt->fetchAll();
            return $user;
        } catch (PDOException $e) {
            echo $e;
        }
    }

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
                $stmt = $this->connection->prepare('SELECT user_id, firstname, lastname, emailaddress, hashedpassword, favorite_holiday_destination FROM user WHERE emailaddress = ? AND hashedpassword = ?;');
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
    

    function getUser($email, $password) {
        try {
            $stmt = $this->connection->prepare('SELECT user_id, firstname, lastname, emailaddress, hashedpassword, favorite_holiday_destination FROM user WHERE emailaddress = ?;');
            $stmt->execute([$email]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            if (!$user || !password_verify($password, $user['hashedpassword'])) {
                return false;
            }
            session_start();
            $_SESSION["firstname"] = $user["firstname"];
            $_SESSION["email"] = $user["emailaddress"];
            echo '<script>window.location = "/feed";</script>';
            return true;
        } catch (PDOException $e) {
            echo $e;
        }
    }
    

    // check user exists by emailaddress
    function checkUserExists($emailaddress)
    {
        try{
            $sql = "SELECT user_id FROM user WHERE emailaddress = :email";
            $stmt = $this->connection->prepare($sql);
            $stmt->execute(array(':email' => $emailaddress));
            
            if($stmt->rowCount() > 0)
                return true;
            return false;
        }
        catch(PDOException $e){
            echo $e;
        }        
    }

    function updateUser($firstname, $lastname, $password, $favorite_holiday_destination, $currentEmail){
        try {
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

    function deleteUser($emailaddress){
        try {
            $sql = "DELETE FROM user WHERE emailaddress = ?";
            $stmt= $this->connection->prepare($sql);
            $stmt->execute([$emailaddress]);
    
            $rowCount = $stmt->rowCount();
            if ($rowCount > 0) {
                $response = ['success' => true, 'message' => "User deleted successfully. $rowCount rows affected."];
            } else {
                $response = ['success' => false, 'message' => "User not found or no rows affected."];
            }
            header('Content-Type: application/json');
            echo json_encode($response);    
        } catch (PDOException $e) {
            $response = ['success' => false, 'message' => $e->getMessage()];
            header('Content-Type: application/json');
            echo json_encode($response);
        }
    }
    
}
