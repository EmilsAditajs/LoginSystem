<?php
if(isset($_POST["submit"])) {

    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdRepeat"];
    $email = $_POST["email"];

    include "../classes/dbh.classes.php";
    include "../classes/signup.classes.php";
    include "../classes/signup-contr.classes.php";
    $signup = new SignUpContr($uid, $pwd, $pwdRepeat, $email);

    $signup->signupUser();

    header("location: ../index.php?error=none");
}
/**
 * Created by PhpStorm.
 * User: 37129
 * Date: 18/02/2022
 * Time: 14:42
 */
