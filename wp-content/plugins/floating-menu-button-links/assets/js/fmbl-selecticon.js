jQuery(document).ready(function(){
    $mp = jQuery.noConflict();
    $mp('.fmbl-option select, .fmbl-table2 select').on('change', function() {
        $mp(this).parents("tr").find( "i" ).removeAttr( "class" ).addClass('fa fa-'+ this.value);
      });    
      $mp('.color-field').wpColorPicker();
      $mp('.fmbl-font-format').on('change', function(){
        $mp('.fmbl_inputsize').val("");
    }); 
    
});
