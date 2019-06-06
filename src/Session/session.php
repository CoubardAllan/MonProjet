<?php

namespace App\Session;

    class session
{
    private static $session;

    private function __construct()
    {
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }
    }

    public static function getSession()
    {
        if (!isset(self::$session)) {
            self::$session = new session();
        }
        return self::$session;
    }

    public function get($clef)
    {
        return $_SESSION[$clef];
    }

    public function set($clef, $valeur)
    {
        $_SESSION[$clef] = $valeur;
    }

    public function existe($clef)
    {
        return array_key_exists($clef, $_SESSION);
    }
}