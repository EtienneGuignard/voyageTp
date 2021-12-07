<?php
class Signup extends Dbh{

    protected function checkUser($userId, $email)
    {   
        $stmt = $this-> connect()->prepare("SELECT login FROM user WHERE login = :login OR emailUser = :emailUser");
        
        if (!$stmt->execute([
            'login' => $userId,
            'emailUser' =>$email
        ])) {
            $stmt=null;
            header('Location:../Voyage.php?error=stmtfailed');
            exit();
        }
        $resultCheck;
        if($stmt->rowCount()>0){
            $resultCheck =false;
        }else{
            $resultCheck=true;
        }
        return $resultCheck;
    }
    protected function setUser($userId, $email, $password)
    { 
        $stmt = $this-> connect()->prepare('INSERT INTO user (login, emailUser, password) VALUES (:login, :emailUser, :password )');

        $hashedPwd= password_hash($password, PASSWORD_DEFAULT);
        if (!$stmt->execute([
            'login' => $userId,
            'emailUser' =>$email,
            'password'  =>$hashedPwd
        ])) {
            $stmt=null;
            header('Location:../Voyage.php?error=stmtInsertfailed');
            exit();
        }
        $stmt=null;
    }
}