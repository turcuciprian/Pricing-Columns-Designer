jQuery(document).ready(function($) {
  var ppd = $('.ppd');

    tinymce.PluginManager.add('ppdButt', function(editor, url) {
        editor.addButton('ppdButt', {
            text: 'Manage Columns',
            icon: false,
            onclick: function() {
              var ppd = $('.ppd');
              if(ppd[0]){
                ppd.removeClass('hidden');
              }
            }
        });
    });
    var ppdPopupClose = $('a.ppdClose');
    if(ppdPopupClose[0]){
      ppdPopupClose.click(function(){
        ppd.addClass('hidden');
      });
    }
});
