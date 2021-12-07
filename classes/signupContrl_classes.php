<?php
class SignupContr extends Signup{
    private $userId;
    private $email;
    private $pwdRepeat;
    private $password;



    
    public function __construct($userId, $email, $password, $pwdRepeat){

        $this->userId= $userId;
        $this->email= $email;
        $this->password= $password;
        $this->pwdRepeat= $pwdRepeat;
    }
    public function signupUser(){
        $result;
        if ($this->emptyInput()==false) {
            header('Location:../Voyage.php?error=emptyinput');
            exit();
        }
        if ($this->invalidUserId()==false) {
            header('Location:../Voyage.php?error=usernameorpassword');
            exit();
        }
        if ($this->invalidEmail()==false) {
            header('Location:../Voyage.php?error=email');
            exit();
        }
        if ($this->passwordMatch()==false) {
            header('Location:../Voyage.php?error=passwordNoMatch');
            exit();
        }
        if ($this->uidTakenCheck()==false) {
            header('Location:../Voyage.php?error=userExist');
        
            exit();
        }
        $this->setUser($this->userId,$this->email,$this->password);
        
    }

    private function emptyInput(){
        $result;
        if (empty($this->userId) || empty($this->email) || empty($this->password) || empty($this->pwdRepeat)) {
            $result=false;
            echo'jinnnn';
        }else{
            return $result=true;
        }
    }
    private function invalidUserId()
    { $result;
        if (!preg_match("/^[a-zA-Z0-9]*/", $this->userId)) {
            $result=false;
        }else{
            return $result=true;
        }
    }
    private function invalidEmail()
    { $result;
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result=false;
        }else{
            return $result=true;
        }
    }
    private function passwordMatch()
    {$result;
        if ($this->password !== $this->pwdRepeat) {
            $result=false;
        }else{
            return $result=true;
        }
    }
    private function uidTakenCheck() {
        $result;
        
        if (!$this->checkUser($this->userId,$this->email)) {
            $result=false;
        }else{
            return $result=true;
        }
    }
}