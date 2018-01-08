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

    private function execute($options)
    {
        $default_options = [
            'header' => ['application/json'],
            'ssl_verifier' => true,
            'method' => null,
            'values' => [],
        ];
        $options = array_merge($default_options, $options);
        $request_url = $this->server . "/" . $options['method'];

        $curl = curl_init(); 
        curl_setopt($curl, CURLOPT_HTTPHEADER, $options['header']);
        curl_setopt($curl, CURLOPT_URL, $request_url); 
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, false); 
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, $options['ssl_verifier']);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $options['values']); 
        curl_exec($curl);
    }
}
?>