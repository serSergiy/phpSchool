class ConfigSingle {
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
}

