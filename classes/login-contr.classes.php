<?php
/**
 * Created by PhpStorm.
 * User: 37129
 * Date: 23/02/2022
 * Time: 19:55
 */

Class LoginContr extends Login
{
    private $uid;
    private $pwd;

    public function __construct($uid, $pwd)
    {
        $this->uid = $uid;
        $this->pwd = $pwd;
    }

    public function loginUser()
    {
        if($this->emptyInput() == false) {
            echo "Empty input!!";
            header("location: ../index.php?error=emptyinput");
            exit;
        }

        $this->getUser($this->uid, $this->pwd);
    }

    private function emptyInput()
    {
        if(empty($this->uid) || empty($this->pwd)) {
            return false;
        } else {
            return true;
        }
    }

}