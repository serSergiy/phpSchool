<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 01.04.2019
 * Time: 17:26
 */

require_once 'Singleton.php';

class ConfigSingle extends Singleton
{
    private $status = 'online';
    private $url = 'https://www.google.com.ua';

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