jQuery(document).ready(function($) {
  var ppdPopupHTML = $('.ppdPopupHTML');

    tinymce.PluginManager.add('ppdButt', function(editor, url) {
        editor.addButton('ppdButt', {
            text: 'Manage Columns',
            icon: false,
            onclick: function() {
              var ppdPopupHTML = $('.ppdPopupHTML');
              if(ppdPopupHTML[0]){
                ppdPopupHTML.removeClass('hidden');
              }
            }
        });
    });
    var ppdPopupClose = $('a.ppdClose');
    if(ppdPopupClose[0]){
      ppdPopupClose.click(function(){
        ppdPopupHTML.addClass('hidden');
      });
    }
});
