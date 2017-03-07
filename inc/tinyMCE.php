<?php
//declare the object
$ppdTinyMCE = new ppdTinyMCE();

// tinyMCE Class
class ppdTinyMCE
{
    public function __construct()
    {
        add_action('admin_head', array($this, 'gavickpro_add_my_tc_button'));
    }

    public function gavickpro_add_my_tc_button()
    {
        global $typenow;
        // check user permissions
        if (!current_user_can('edit_posts') && !current_user_can('edit_pages')) {
            return;
        }
        // verify the post type
        if (!in_array($typenow, array('post', 'page'))) {
            return;
        }
        // check if WYSIWYG is enabled
        if (get_user_option('rich_editing') == 'true') {
            // add new buttons
          add_filter('mce_buttons', array($this, 'ppdnewTinyMCEButt'));
          // Load the TinyMCE plugin : editor_plugin.js (wp2.5)
          add_filter('mce_external_plugins', array($this, 'ppd_register_tinymce_javascript'));
          //adding the button to second row
          add_filter('mce_buttons_2', array($this, 'ppdSecondRow'));
        }
    }
    public function ppdSecondRow($buttons){
	     $buttons[] = 'ppdButt';

	    return $buttons;
    }

    // adding the tinyMCEbutton
    public function ppdnewTinyMCEButt($buttons)
    {
        /*
          * Add in a core button that's disabled by default
        */
        array_push($buttons, 'separator');

        return $buttons;
    }
    public function ppd_register_tinymce_javascript($plugin_array)
    {
        $plugin_array['ppdButt'] = plugins_url('../js/custom.min.js', __FILE__);

        return $plugin_array;
    }
}
