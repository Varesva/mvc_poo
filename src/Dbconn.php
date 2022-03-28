<?php

class Dbconn
{
    public static function getPdo()
    {
        return new PDO
        (
            'mysql:host=127.0.0.1;dbname=bd_blog;',
            'root', 
            ''
        );
    }
}
