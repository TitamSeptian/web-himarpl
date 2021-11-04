const navSlide = () => {
    const burger = document.querySelector(".burger");
    const nav = document.querySelector(".nav-links");
    const navLinks = document.querySelectorAll('.nav-links li');
    let isActive = false;
    console.log("nav-active : " + isActive)

    burger.addEventListener("click", ()=>{
        nav.classList.toggle("nav-active");
        isActive = !isActive;
        navLinks.forEach((link, index)=>{
            if(isActive) {
                link.style.animation = `navLinkFadeIn 0.4s ease forwards ${index / 7 + 0.2}s`;
                // console.log("nav li: "+ index + " in");
            } else {
                link.style.animation = `navLinkFadeOut 0.2s ease forwards 0s`;
                // console.log("nav li: "+ index + " out");
            }
            // console.log(link.style.animation);
        });
        //Burger animation
        burger.classList.toggle('toggle');
    });

}
navSlide();
  AOS.init();

$(window).on('load', function() {  
	$(".preloader").fadeOut("slow");
	$("#desc-logo1,#desc-logo2,#desc-logo3").hide();
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

// $(".logo1").hover(function () {
// 	$(".logo1").css({
// 		"fill": '#f6f6f6',
// 		"transition": 'all 0.2 ease-in-out',
// 		"cursor": 'pointer',
// 	})
// })

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

// $(".logo1,.logo2,.logo3").mouseleave(function () {
// 	$(".logo1,.logo2,.logo3").css({
// 		"fill": '#434343',
// 		"transition": 'all 0.2 ease-in-out',
// 	})
// })