    $(function() {



var jqxhr = $.get( "http://eidwhd.com/index.php/smartwidgets/kpi", function( ) {
  alert( "success" );
})
  .done(function( data ) {
  $( "#kpi" ).append( data );
  $(".page-sidebar.scroll").mCustomScrollbar("update");
  $(".page-sidebar.scroll").mCustomScrollbar("disable",true);
  $(".content").mCustomScrollbar();
  })
  .fail(function() {
    alert( "error" );
  })
  .always(function() {
    alert( "finished" );
  });
 
// Perform other work here ...
 
// Set another completion function for the request above
jqxhr.always(function() {
  alert( "second finished" );
});(jQuery);
      });