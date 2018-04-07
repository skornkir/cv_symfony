$(document).ready(function () {
    // $('.contact-submit').click(function (e) {
    //     e.preventDefault();
    //     $.post('savecontact', { test: 'test'}).done(function (data) {
    //         console.log(data);
    //         alert('done');
    //     })
    // })

    $('#crtNav a').click(function (e) {
       e.preventDefault();
       var selector = $(this).attr('href');
       $('html, body').animate({
          scrollTop : $(selector).offset().top
       }, 800);
    });


});