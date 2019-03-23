<?php

class Config
{
    public static function getConnectDb()
    {
        try
        {
            $host = 'localhost';
            $dbname = 'test';
            $user = 'root';
            $password = '';
            $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8",$user,$password);
            return $db;
        } 
        catch (PDOException $e) 
        {
            exit ($e->getMessage());
        }
    }
}

