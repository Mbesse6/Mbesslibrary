<?php

    class Database
    {
    private static $dbhost = "localhost";
    private static $dbname = "library";
    private static $dbUser = "root";
    private static $dbpwd = "";

    private static $connection = null;

        public static function connect()
        {
            try 
            {
                self::$connection = new PDO("mysql:host=" .  self::$dbhost . ";dbname=" . self::$dbname,self::$dbUser,self::$dbpwd);
            } 
            catch (PDOExeption $e)
            {
                die($e->getMessage());
            }
            return self::$connection;
        }

        public static function disconnect()
        {
            self::$connection = null;
        }
    }
   
    Database::connect(); 


?>