<?php

class DAO
{
    protected const DBHOST = "infornet.com.br";
    protected const USER = "infor430_leticia";
    protected const PASSWORD = "D!cEmV,C+-=N";
    protected const DB = "infor430_php_leticia";
    public static $mysqli;

    static function connectDatabase()
    {
        self::$mysqli = new mysqli(self::DBHOST, self::USER, self::PASSWORD, self::DB);
        if(self::$mysqli->connect_errno)
        {
            echo "Conection failed".self::$mysqli->connect_error;
            return false;
        }
        echo "Conection sucessfully";
        return true;
    }
}

?>