<?php
$ppdRestObj = new ppdRest();

class ppdRest
{
    public function __construct()
    {
        add_action('rest_api_init', array($this, 'routesInit'));
    }
    public function routesInit($generalArr)
    {
      register_rest_route('ppd', '/return', array('methods' => 'POST', 'callback' => array($this, 'ppdReturn'), 'args' => array()));
        register_rest_route('ppd', '/set', array('methods' => 'POST', 'callback' => array($this, 'ppdSet'), 'args' => array()));
    }
    public function ppdReturn()
    {
        return $finalResult;
    }
    public function ppdSet()
    {
        return $finalResult;
    }
}
