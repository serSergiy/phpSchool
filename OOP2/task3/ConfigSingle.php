<?php

class ConfigSingle
{
    private $status = 'online';
    private $url = 'https://www.google.com.ua';
    private static $_instance = null;

    private function __construct()
    {
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }

    static public function getInstance()
    {
        return is_null(self::$_instance)
            ? new self()
            : self::$_instance;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

}

