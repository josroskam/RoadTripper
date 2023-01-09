<?php
require __DIR__ . '/repository.php';
require __DIR__ . '/../models/user.php';

class UserRepository extends Repository
{
    // get all users
    function getAll()
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

    // insert a new user
    function insert($user)
    {
        try {
            $stmt = $this->connection->prepare("INSERT into user (title, content, author, posted_at) VALUES (?,?,?, NOW())");

            $stmt->execute([$user->getTitle(), $user->getContent(), $user->getAuthor()]);

        } catch (PDOException $e) {
            echo $e;
        }
    }

    // get single user to login
    function getUser($emailaddress, $password)
    {
        try{
            $sql = "SELECT * FROM user WHERE emailaddress = :email AND password = :password";
            $stmt = $this->connection->prepare($sql);
            $stmt->execute(array(':email' => $emailaddress, ':password' => $password));
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $user = $result;
            return $user;
        }
        catch(PDOException $e){
            echo $e;
        }        
    }
}
