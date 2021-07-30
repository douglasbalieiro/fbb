$('#open').click(function() {
    $('#dialog').dialog('open');

});

jQuery(document).ready(function() {
    jQuery("#dialog").dialog({
        autoOpen: false,
        modal: true,
        open: function(){
            jQuery('.ui-widget-overlay').bind('click',function(){
                jQuery('#dialog').dialog('close');
            })
        }
    });
}); 
