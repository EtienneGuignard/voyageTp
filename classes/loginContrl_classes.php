<?php
class LoginContr extends Login{
    private $userId;
    private $password;



    
    public function __construct($userId, $password){

        $this->userId= $userId;
        $this->password= $password;
    }
    public function loginUser(){
        $result;
        if ($this->emptyInput()==false) {
            header('Location:../Voyage.php?error=emptyinput');
            exit();
        }
        $this->getUser($this->userId,$this->email,$this->password);
        
    }

    private function emptyInput(){
        $result;
        if (empty($this->userId) || empty($this->password)) {
            $result=false;
            echo'jinnnn';
        }else{
            return $result=true;
        }
    }
}