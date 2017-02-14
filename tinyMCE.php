<?php
//declare the object
$ppdTinyMCE = new ppdTinyMCE();

// tinyMCE Class
class ppdTinyMCE
{
    public function __construct()
    {
        add_filter('mce_buttons_2', array($this, 'my_mce_buttons_2'));
    }
    // adding the tinyMCEbutton
    public function my_mce_buttons_2($buttons)
    {
        /*
          * Add in a core button that's disabled by default
        */
        $buttons[] = 'superscript';
        $buttons[] = 'subscript';
        return $buttons;
    }
}
