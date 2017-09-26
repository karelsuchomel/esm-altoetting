// Find all YouTube videos
var $allVideos = jQuery("iframe"),

    // The element that is fluid width
    $fluidEl = jQuery(".content-text p");

// Figure out and save aspect ratio for each video
$allVideos.each(function() {

  jQuery(this)
    .data('aspectRatio', this.height / this.width)

    // and remove the hard coded width/height
    .removeAttr('height')
    .removeAttr('width');
});

// When the window is resized
jQuery(window).resize(function() {

  var newWidth = $fluidEl.width();
  // if viewport width greather 780px breakpoint, devide newWidth by 2
  if ( window.innerWidth > 780 ) 
  {
    newWidth = newWidth / 2;
  }

  // Resize all videos according to their own aspect ratio
  $allVideos.each(function() {

    var $el = jQuery(this);
    $el
      .width(newWidth)
      .height(newWidth * $el.data('aspectRatio'));

  });

// Kick off one resize to fix all videos on page load
}).resize();