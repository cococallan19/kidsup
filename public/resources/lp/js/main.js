$(window).load(function(){
  $.magnificPopup.open({
      items: {src: '#popup'},
      type: 'inline',
      removalDelay: 100,
      mainClass: 'mfp-fade'
    }, 0);
});


$(function() {

  //slick
  $('.kids-photo-slider').slick({
    autoplay: true,
    infinite: true,
    dots: true,
    vertical: true,
    appendArrows: $('#arrows01')
  });
  $('.sns-slider').slick({
    autoplay: true,
    infinite: true,
    dots: true,
    appendArrows: $('#arrows02')
  });

  // inview
	$('.program-container').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
		if(isInView){
			$(this).stop().addClass('fade');
		}
		else{
			$(this).stop().removeClass('fade');
		}
	});
  $('.contact-image-door').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
		if(isInView){
			$(this).stop().addClass('rotate');
		}
		else{
			$(this).stop().removeClass('rotate');
		}
	});
  $('.halloween').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
		if(isInView){
			$(this).stop().addClass('scale');
		}
		else{
			$(this).stop().removeClass('scale');
		}
	});

  // lazyload
	$(".lazy").lazyload({
		effect: 'fadeIn',
		threshold: 500,
	});

});
