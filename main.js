$(document).ready(function(){

  $('.slide:first').addClass('active');
  $('.slide:last').addClass('past');

  function nextSlide() {
  	var active = $('.slide.active');
  	active.removeClass('active');
  	active.next().addClass('active');
  	if(active.is(':last-child')) {
  		$('.slide:first').addClass('active');
  	}
    
  	var past = $('.slide.past');
  	past.removeClass('past');
  	past.next().addClass('past');
  	if(past.is(':last-child')) {
  		$('.slide:first').addClass('past');
  	}
  }

  setInterval(nextSlide, 10000);

});
