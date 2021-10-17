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