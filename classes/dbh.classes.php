<?php
/**
 * Created by PhpStorm.
 * User: 37129
 * Date: 18/02/2022
 * Time: 14:57
 */

Class Dbh
{

    protected function connect () {
        try {
            $username = "emils";
            $password = "qwertyui";
            $dbh = new PDO('mysql:host=localhost;dbname=ooplogin', $username, $password);
            return $dbh;
        }
        catch (PDOException $e) {
            print "Error!: " . $e->getMessage()."<br/>";
            die();
        }
    }
}