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
	$(".preloader").fadeOut("slow");;
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
