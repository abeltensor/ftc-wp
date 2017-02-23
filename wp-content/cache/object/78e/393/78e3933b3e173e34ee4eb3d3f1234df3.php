²B¯X<?php exit; ?>a:1:{s:7:"content";O:8:"stdClass":23:{s:2:"ID";s:2:"42";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2017-02-23 02:46:23";s:13:"post_date_gmt";s:19:"2017-02-23 02:46:23";s:12:"post_content";s:1644:"// One page nav code 

jQuery( document ).ready(function(){
  /* Add padding and id's to each front page section */
  jQuery( "h2.entry-title" ).each( function() {
    var panelId = jQuery( this ).html().toLowerCase().replace(/\s+/g, "-");
      jQuery( this ).wrapInner(function() {
        return "<span style='padding-top:96px;' id='" + panelId + "'></span>";
      })
  })
    
  /* Remove navigation link highlighting */
    jQuery('#top-menu li').removeClass('current-menu-item current_page_item ');
  
  /* Add highlighting on click */
    jQuery('#top-menu li a').on('click', function(event) {
    jQuery(this).parent().parent().find('li').removeClass('current-menu-item');
    jQuery(this).parent().addClass('current-menu-item');
  });
  
    /* Check current URL and highlight nav for current page */
  jQuery('#top-menu li a').each( function() {
      var pageUrl = jQuery( location ).attr( 'href' );
      var navUrl = jQuery( this ).attr( 'href' );
      if ( navUrl == pageUrl ) {
          jQuery( this ).parent().addClass('current-menu-item');
        } 
    })
})


// Sticky nav on pages and posts

var body = jQuery( 'body' );
var navigation = body.find( '.navigation-top' );
var customHeader = body.find( '.custom-header' );
var navigationOuterHeight = navigation.outerHeight();
if ( body.hasClass( 'has-header-image' ) ) {
  var headerOffset = customHeader.innerHeight() - navigationOuterHeight;
}
jQuery( window ).on( 'scroll', function() {
  if ( jQuery( window ).scrollTop() >= headerOffset ) {
    navigation.addClass( 'site-navigation-fixed' );
  } else {
    navigation.removeClass( 'site-navigation-fixed' );
  }
});";s:10:"post_title";s:0:"";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:6:"closed";s:11:"ping_status";s:6:"closed";s:13:"post_password";s:0:"";s:9:"post_name";s:2:"42";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2017-02-23 02:46:23";s:17:"post_modified_gmt";s:19:"2017-02-23 02:46:23";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:75:"https://ftc-wp-atensor.c9users.io/?post_type=hm_custom_javascript&#038;p=42";s:10:"menu_order";s:1:"0";s:9:"post_type";s:20:"hm_custom_javascript";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}}