<?php
session_start();
class Login extends Dbh{

    protected function getUser($userId, $email, $password)
    { 
        $stmt = $this-> connect()->prepare('SELECT password FROM user WHERE login=:login or emailUser=:emailUser');
        if (!$stmt->execute([
            'login' => $userId,
            'emailUser' =>$email
        ])) {
            $stmt=null;
            header('Location:../Voyage.php?error=stmtInsertfailed');
            exit();
        }
        if ($stmt->rowCount()==0) {
            $stmt = null;
            header('Location:../Voyage.php?error=usernotfound');
            exit();
        }
        $pwdHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkPwd = password_verify($password, $pwdHashed[0]["password"]);
        if ($checkPwd==false) {
            $stmt=null;
            header('Location:../Voyage.php?error=wrongpasswordor');
        }
        $stmt = $this-> connect()->prepare('SELECT * FROM user WHERE login=:login or emailUser=:emailUser AND password=:password');
        if (!$stmt->execute([
            'login' => $userId,
            'password'  =>$password,
            'emailUser' =>$email
        ])) {
            $stmt=null;
            header('Location:../Voyage.php?error=stmtInsertfailed');
            exit();
        }
        $user=$stmt->fetchAll(PDO::FETCH_ASSOC);
        $_SESSION['userid']=$user[0]['idUser'];
        $_SESSION['login']=$user[0]['login'];
        $stmt=null;
    }
}