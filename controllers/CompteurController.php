<?php

class CompteurController
{
    private static $_compteur;

    public function __construct()
    {
        self::$_compteur ++;
    }

    public static function getCompteur()
    {
        return self::$_compteur;
    }

}