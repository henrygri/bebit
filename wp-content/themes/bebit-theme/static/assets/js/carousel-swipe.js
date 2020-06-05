jQuery("#myCarousel").swipe({

  swipe: function(event, direction, distance, duration, fingerCount, fingerData) {

    if (direction == 'left') jQuery(this).carousel('next');
    if (direction == 'right') jQuery(this).carousel('prev');

  },
  allowPageScroll:"vertical"

});