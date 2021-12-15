$(function () {
    $(window).on('scroll', function () {
        if ( $(window).scrollTop() > 10 ) {
						$('.navbar').addClass('active');
						$('.blog .nav-item a').removeClass('text-dark');
        } else {
						$('.navbar').removeClass('active');
						$('.blog .nav-item a').addClass('text-dark');
        }
    });
});
// navSlide();
  AOS.init();

$(window).on('load', function() {  
	$(".preloader").fadeOut("slow");
	$("#desc-logo1,#desc-logo2,#desc-logo3").hide();
	$(".desc-logo-kabinet").hide();
});

	$('body').delegate('.gallery-wrap .caption button.action', 'click', function () {
		
		var image = $(this).parent('div').siblings('img').attr('src');
		var title = $(this).parent('div').siblings('.description').children('.title').html();
		var text = $(this).parent('div').siblings('.description').children('.text').html();
		var userUpload = $(this).parent('div').siblings('.description').children('.user-upload').html();
		var view = $('.viewed');

		view.addClass('active');
		view.find('.title').html(title);
		view.find('.text').html(text);
		view.find('#img-viewed').attr('src', image);
		view.find('.user-upload').html(userUpload);

		$('body').css({
			"overflow": "hidden"
		})
	});

	$('.viewed .close').click(function () {
		$('.viewed').removeClass('active');
		$('body').css({
			"overflow": "auto"
		})
	});


$('#scroll-top').click(function () {
	$('html, body').animate({
      scrollTop: 0
    }, 800, function(){
      $(window).scrollTop(0);
    });
});



$(window).scroll(function (e) {
	let scrollTop = $(window).scrollTop(); 
	if (scrollTop > 500) {
		scrollToTopShow();
	} else { 
		scrollToTopHide();
	}
});

function scrollToTopShow() {
	$('#scroll-top').removeClass('bounceOutDown').addClass('bounceInUp');
}

function scrollToTopHide() { 
	$('#scroll-top').removeClass('bounceInUp').addClass('bounceOutDown');  
}

$(".logo1").click(function (e) {
	$(".logo1:nth-child(1)").css({
		"fill": '#d9d9d6',
		"transition": 'all 0.2 ease-in-out',
		"cursor": 'pointer',
	})
	$(".logo1:nth-child(2),.logo1:nth-child(3)").css({
		"fill": 'var(--color-1)',
		"transition": 'all 0.2 ease-in-out',
		"cursor": 'pointer',
	})
	$(".logo1:nth-child(4),.logo1:nth-child(5)").css({
		"fill": 'var(--color-2)',
		"transition": 'all 0.2 ease-in-out',
		"cursor": 'pointer',
	})
	$(".logo3,.logo2").css({
		"fill": '#434343',
		"transition": 'all 0.2 ease-in-out',
	})
	$("#desc-logo3,#desc-logo2,#desc-logo").hide();
	$("#desc-logo1").fadeIn();
})
$(".logo2").click(function () {
	// console.log($("#logo21").html());
	$("#logo21").css({
		"fill": 'var(--color-1)',
		"transition": 'all 0.2 ease-in-out',
		"cursor": 'pointer',
	});
	$("#logo22").css({
		"fill": 'var(--color-2)',
		"transition": 'all 0.2 ease-in-out',
		"cursor": 'pointer',
	});
	$("#logo23").css({
		"fill": '#d9d9d6',
		"transition": 'all 0.2 ease-in-out',
		"cursor": 'pointer',
	});
	$(".logo3,.logo1").css({
		"fill": '#434343',
		"transition": 'all 0.2 ease-in-out',
	})
	$("#desc-logo1,#desc-logo3,#desc-logo").hide();
	$("#desc-logo2").fadeIn();
})

$(".logo3").click(function () {
	$(".logo3").css({
		"fill": 'var(--color-1)',
		"transition": 'all 0.2 ease-in-out',
		"cursor": 'pointer',
	})
	$(".logo2,.logo1").css({
		"fill": '#434343',
		"transition": 'all 0.2 ease-in-out',
	})
	$("#desc-logo1,#desc-logo2,#desc-logo").hide();
	$("#desc-logo3").fadeIn();
})

$(".lamp path").click(function () {
	if ($(this).hasClass("panah")) {
		$(this).css({
			"fill": 'var(--ins-color-2)',
		})
		showKabinetDesc("panah")
	}
	if ($(this).hasClass("moon")) {
		$(this).css({
			"fill": 'var(--ins-color-1)',
		})
		showKabinetDesc("moon")
	}
	if ($(this).hasClass("dot")) {
		$(".lamp path").css({
			"fill": 'var(--ins-color-2)',
		})
		showKabinetDesc("lamp")
	}
	$(this).mouseleave(function () {
		$(".lamp path").css({
			"fill": '#838383',
		})
	})
})

$(".pcb").click(function () {
	$(this).css({
		"stroke": 'var(--ins-color-2)',
	})
	$(this).mouseleave(function () {
		$(this).css({
			"stroke": '#838383',
		})
	})
	showKabinetDesc("pcb")

})
$(".inspira-text path").click(function () {
	if ($(this).hasClass("use-color-ins-1")) {
		$(".inspira-text path.use-color-ins-1").css({
			"fill": 'var(--ins-color-1)',
		})
	}
	if ($(this).hasClass("use-color-ins-2")) {
		$(".inspira-text path.use-color-ins-2").css({
			"fill": 'var(--ins-color-2)',
		})
	}
	$(this).mouseleave(function () {
		$(".inspira-text path").css({
			"fill": '#838383',
		})
	})
	showKabinetDesc("inspira-text")

})

function showKabinetDesc(dataLogo) {
	$("#pre-text-kabinet").hide();
	$(".desc-logo-kabinet[data-logo-kab="+dataLogo+"]").fadeIn()
	$(".desc-logo-kabinet[data-logo-kab!="+dataLogo+"]").hide()
}