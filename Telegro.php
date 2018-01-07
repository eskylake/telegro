<?php
class Telegro
{
    CONST BASE_URL = "https://api.telegram.org/bot";
    private $server;

    public function __construct($bot_token)
    {
        $this->server = self::BASE_URL . $bot_token;
    }
}
?>