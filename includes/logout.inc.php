<?php
/**
 * Created by PhpStorm.
 * User: 37129
 * Date: 23/02/2022
 * Time: 20:41
 */

session_start();
session_unset();
session_destroy();

header("location: ../index.php?error=none");
