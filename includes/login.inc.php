<?php
/**
 * Created by PhpStorm.
 * User: 37129
 * Date: 18/02/2022
 * Time: 14:42
 */

if(isset($_POST["submit"])) {

    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];

    include "../classes/dbh.classes.php";
    include "../classes/login.classes.php";
    include "../classes/login-contr.classes.php";
    $login = new LoginContr($uid, $pwd);

    $login->loginUser();

    header("location: ../index.php?error=none");
}