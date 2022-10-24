$(function(){
    $('.clientes-slider .slider-container').slick({
        centerMode: false,
        infinite: false,
        speed: 1000,
        slidesToShow: 4,
        arrows: false,
        dots: true,
        autoplay: true, 
        autoplaySpeed: 3000,
        pauseOnHover:false, 
        responsive: [
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 2,
            }
        }
        ],
        responsive: [
            {
                breakpoint: 500,
                settings: {
                    slidesToShow: 1,
                }
            }
            ]   
    });  

    $('.depoimentos .depoimentos-box').slick({
        centerMode: false,
        infinite: false,
        speed: 1000,
        slidesToShow: 1,
        arrows: false,
        dots: true,
        autoplay: true, 
        autoplaySpeed: 3000,
        pauseOnHover:false,   
    });  
})