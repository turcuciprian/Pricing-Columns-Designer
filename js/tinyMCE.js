jQuery(document).ready(function($) {
    tinymce.PluginManager.add('ppdButt', function(editor, url) {
        editor.addButton('ppdButt', {
            text: 'Manage Columns',
            icon: false,
            onclick: function() {
                editor.insertContent('Hello World!');
            }
        });
    });
});
