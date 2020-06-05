$(document).ready(function () {
    $('.menu-toggler').on('click', function() {
        $(this).toggleClass('open');
        $('.top-nav').toggleClass('open');
    });

    $('.nav-link').on('click', function() {
        $('.menu-toggler').removeClass('open');
        $('.top-nav').removeClass('open');
    });
    
    $('nav a[href*="#"]').on('click', function() {
        var anchor = $(this);
        $('html, body').animate( {
            scrollTop: $(anchor.attr('href')).offset().top - 100
        }, 1000);
    });

    $('#up').on('click', function() {
        var anchor = $(this);
        $('html, body').animate( {
            scrollTop: 0
        }, 1000);
    });

    AOS.init({
        easing: 'ease',
        duration: 1800,
        once: true
    });

    baguetteBox.run('.gallery', {
        animation: 'fadeIn'
    });
});

function formValidator(){
    var name = document.getElementById('name').value;
    var phone = document.getElementById('phone').value;
    var email = document.getElementById('email').value;
    if(name == '') {
        alert("Enter a Valid Name!");
        document.getElementById('name').style.borderColor="red";
        return false;
    }

    if(phone == '') {
        alert("Enter a Valid Phone Address!");
        document.getElementById('phone').style.borderColor="red";
        return false;
    }
    
    if(email == '') {
        alert("Enter a Valid Email Address!");
        document.getElementById('email').style.borderColor="red";
        return false;
    }
    else{
        alert("Information Enter is Valid, Check Your Email for Feedback!");
        document.getElementById('name').style.borderColor="green";
        return true;
    }

    return true;
}