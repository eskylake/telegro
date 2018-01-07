<?php
class Telegro
{
    public $base_url = "https://api.telegram.org/bot";
    private $server;
    private $bot_token;

    public function __construct($bot_token)
    {
    	$this->bot_token = $bot_token;
        $this->setServer($this->base_url);
    }

    private function setServer($base_url)
    {
    	$this->server = $this->base_url . $this->bot_token;
    }

    public function setBaseUrl($base_url)
    {
    	$this->base_url = $base_url;
    	$this->setServer($base_url);
    }

    public function getBaseUrl()
    {
    	return $this->base_url;
    }
}
?>