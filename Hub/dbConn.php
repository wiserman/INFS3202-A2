<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of dbConn
 * ADAPTED FROM: http://weebtutorials.com/2012/03/pdo-connection-class-using-singleton-pattern/
 * @author Liam Cosgrove
 */
class dbConn {
    protected static $db;
    private function __construct() {
        try {
            $servername = "liamjoshinfs3202.database.windows.net";
            $username = "liam";
            $password = "Password123";
            $dbname = "infs3202";
            self::$db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection Error: " . $e->getMessage();
        }
    }
    public static function getConnection() {
        if (!self::$db) {
            new dbConn();
        }
        return self::$db;
    }
}
