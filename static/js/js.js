$(document).ready(function(){
    $(".owl-carousel").owlCarousel({
        loop: true, // Enable loop
        margin: 10, // Margin between items
        nav: true, // Enable navigation arrows
        responsive:{
            0:{
            items: 1 // Number of items to show on mobile devices (1 item on mobile)
            },
            600:{
            items: 2 // Number of items to show on tablets (3 items between 600px and 900px screen width)
            },
            1000:{
            items: 3 // Number of items to show on desktops (5 items between 900px and above screen width)
            }
        }
    });
});