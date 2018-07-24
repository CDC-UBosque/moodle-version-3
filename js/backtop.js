jQuery(document).ready(function() {
	var stickyNavTop = $('.main-menu').offset().top;
	var stickyNav = function() {
			var scrollTop = $(window).scrollTop();
			if (scrollTop > stickyNavTop) {
				$('.main-menu').addClass('fixed-header');
				$('.only').addClass('fixed-header-only');
				$('body').addClass('fixed-header-content-margin');
			} else {
				$('.main-menu').removeClass('fixed-header');
				$('.only').removeClass('fixed-header-only');
				$('body').removeClass('fixed-header-content-margin');
			}
		};
	stickyNav();
	$(window).scroll(function() {
		stickyNav();
		var scrollTop = $(window).scrollTop();
		if (scrollTop > 10) {
			$('.btn-to-top').fadeIn();
		} else {
			$('.btn-to-top').fadeOut();
		};
	});
	$('.btn-to-top').click(function(e) {
		var _target = $($(this).attr('href'));
		$(window).scrollTo(_target.offset().top - 70, 70);
		e.preventDefault();
	});
});

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 10 || document.documentElement.scrollTop > 10) {
        document.getElementById("myBtn").fadeIn();
    } else {
        document.getElementById("myBtn").fadeOut();
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}