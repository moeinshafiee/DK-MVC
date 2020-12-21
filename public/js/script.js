$(document).ready(function () {

    var timer = {};

    $('.my-item').hover(function () {

        $(this).removeClass('is-hovered');

        var catNumber = $(this).attr('cat-index');
        clearTimeout(timer[catNumber]);
        timer[catNumber] = setTimeout(function () {
            $('#cat-' + catNumber).show();
        }, 400);

    }, function () {
        var catNumber = $(this).attr('cat-index');
        clearTimeout(timer[catNumber]);
        timer[catNumber] = setTimeout(function () {
            $('#cat-' + catNumber).hide();
        }, 400);

    });


    $('.level1-li').hover(function () {
        $('.nav-overlay').addClass('active');
        $('> div', this).show();

    }, function () {
        $('.nav-overlay').removeClass('active');
        $('#first-ch').addClass('is-hovered');
        $('.subnav-container').hide();
    });
    //************************************************* main slider
    var sliderTag = $('.car-div');
    var sliderItem = sliderTag.find('.car-a');
    var numberItems = sliderItem.length;
    var nextslide = 1;
    var intervalTime = 60000;
    var sliderBullet = $('.car-pagination').find('span');

    sliderBullet.eq(0).addClass('active-bullet');

    function mainSlider() {

        if (nextslide >= numberItems) {
            nextslide = 0;
        }
        if (nextslide < 0) {
            nextslide = numberItems - 1;
        }

        sliderItem.hide();
        sliderItem.eq(nextslide).fadeIn(300);
        sliderBullet.removeClass('active-bullet');
        sliderBullet.eq(nextslide).addClass('active-bullet');
        nextslide++;
    }

    var myInterval = setInterval(mainSlider, intervalTime);

    sliderTag.mouseleave(function () {
        clearInterval(myInterval);
        myInterval = setInterval(mainSlider, intervalTime);
    });

    $('.nextSlide-btn').click(function () {
        clearInterval(myInterval);
        nextslide -= 2;
        mainSlider();
    });
    $('.prevSlide-btn').click(function () {
        clearInterval(myInterval);
        mainSlider();
    });
    $('.car-pagination .car-bullet').click(function () {
        clearInterval(myInterval);
        // var bindex = $(this).index();
        nextslide = $(this).index();
        mainSlider();
    });


});

//    scroller slider

var ulRight = 0;
var i = 0;

function scroller(dir, tag) {

    var imgTag = $(tag);
    var scrollerDiv = imgTag.parents('.sc-t-div');
    var scrollerUl = scrollerDiv.find('ul');
    var scrollerLi = scrollerUl.find('li');
    var scrollerLiNum = scrollerLi.length; // number of li
    var intQuotient = Math.floor(scrollerLiNum / 3); // integer number of 3 times round
    var remainder = scrollerLiNum - (intQuotient * 3); // 1 or 2 or 0 s number
    var sdiv = scrollerLi.find('.scroller-slide');
    var ItemsWidth = parseFloat(sdiv.css('width')); // width of each item
    var tripleWidth = 3 * ItemsWidth;
    var scrollerPrevBtn = $('.sc-prev-btn');
    var scrollerNextBtn = $('.sc-next-btn');
    if (remainder === 2) {
        intQuotient -= 1;
    } else {
        intQuotient -= 2;
    }

    if (dir === 'next') {
        scrollerPrevBtn.removeClass('sc-btn-disabled');
        if (i < (intQuotient)) {
            ulRight -= tripleWidth;
        } else if (i === intQuotient) {
            scrollerNextBtn.addClass('sc-btn-disabled');
            if (remainder === 0) {
                ulRight -= (2 * ItemsWidth);
            } else if (remainder === 2) {
                ulRight -= ItemsWidth;
            } else if (remainder === 1) {
                ulRight -= tripleWidth;
            }
        }
        if (i <= intQuotient) {
            i++;
        }
    }
    if (dir === 'prev') {
        scrollerNextBtn.removeClass('sc-btn-disabled');
        if (i < (intQuotient + 1) && i > 0) {
            ulRight += tripleWidth;
        } else if (i === (intQuotient + 1)) {
            if (remainder === 0) {
                ulRight += (2 * ItemsWidth);
            } else if (remainder === 2) {
                ulRight += ItemsWidth;
            } else if (remainder === 1) {
                ulRight += tripleWidth;
            }
        }
        if (i > 0) {
            i--;
        }
        if (i === 0) {
            scrollerPrevBtn.addClass('sc-btn-disabled');
        }
    }
    scrollerUl.animate({right: ulRight}, 700, 'swing');

}

//   end of scroller slider


//    scroller slider111

// var scrollerDiv = $('.sc-t-div');
// var scrollerUl = scrollerDiv.find('ul');
// var scrollerLi = scrollerUl.find('li');
// var scrollerLiNum = scrollerLi.length; // number of li
// var intQuotient = Math.floor(scrollerLiNum / 3); // integer number of 3 times round
// var remainder = scrollerLiNum - (intQuotient * 3); // 1 or 2 or 0 s number
// var ulRight = parseFloat(scrollerUl.css('right'));
// var sdiv = scrollerLi.find('.scroller-slide');
// var ItemsWidth = parseFloat(sdiv.css('width')); // width of each item
// var tripleWidth = 3 * ItemsWidth;
//  scrollerUl.css('width', (scrollerLiNum * ItemsWidth)); // assignment of ul width
// var scrollerPrevBtn = $('.sc-prev-btn');
// var scrollerNextBtn = $('.sc-next-btn');
// if (remainder === 2) {
//     intQuotient -= 1;
// } else {
//     intQuotient -= 2;
// }
// var i = 0;
//
// function scroller(dir) {
// var imgTag = $(tag);
// var scrollerDiv = imgTag.parents('.sc-t-div');
// var scrollerDiv = $('.sc-t-div');
// var scrollerUl = scrollerDiv.find('ul');
// var scrollerLi = scrollerUl.find('li');
// var scrollerLiNum = scrollerLi.length; // number of li
// var intQuotient = Math.floor(scrollerLiNum / 3); // integer number of 3 times round
// var remainder = scrollerLiNum - (intQuotient * 3); // 1 or 2 or 0 s number
// var ulRight = parseFloat(scrollerUl.css('right'));
// var sdiv = scrollerLi.find('.scroller-slide');
// var ItemsWidth = parseFloat(sdiv.css('width')); // width of each item
// var tripleWidth = 3 * ItemsWidth;
// scrollerUl.css('width', (scrollerLiNum * ItemsWidth)); // assignment of ul width
// var scrollerPrevBtn = $('.sc-prev-btn');
// var scrollerNextBtn = $('.sc-next-btn');
// if (remainder === 2) {
//     intQuotient -= 1;
// } else {
//     intQuotient -= 2;
// }
// var i = 0;

//     if (dir === 'next') {
//         scrollerPrevBtn.removeClass('sc-btn-disabled');
//         if (i < (intQuotient)) {
//             ulRight -= tripleWidth;
//         } else if (i === intQuotient) {
//             scrollerNextBtn.addClass('sc-btn-disabled');
//             if (remainder === 0) {
//                 ulRight -= (2 * ItemsWidth);
//             } else if (remainder === 2) {
//                 ulRight -= ItemsWidth;
//             } else if (remainder === 1) {
//                 ulRight -= tripleWidth;
//             }
//         }
//         if (i <= intQuotient) {
//             i++;
//         }
//     }
//     if (dir === 'prev') {
//         scrollerNextBtn.removeClass('sc-btn-disabled');
//         if (i < (intQuotient + 1) && i > 0) {
//             ulRight += tripleWidth;
//         } else if (i === (intQuotient + 1)) {
//             if (remainder === 0) {
//                 ulRight += (2 * ItemsWidth);
//             } else if (remainder === 2) {
//                 ulRight += ItemsWidth;
//             } else if (remainder === 1) {
//                 ulRight += tripleWidth;
//             }
//         }
//         if (i > 0) {
//             i--;
//         }
//         if (i === 0) {
//             scrollerPrevBtn.addClass('sc-btn-disabled');
//         }
//     }
//     scrollerUl.animate({right: ulRight}, 700, 'swing');
// }
//
// scrollerNextBtn.click(function () {
//     scroller('next');
// });
// scrollerPrevBtn.click(function () {
//     scroller('prev');
// });
//   end of scroller slider


//    scroller slider
// var scrollerUl = $('.s-div').find('ul');
//
// function scroll(dir) {
//
//     var ulRight = parseFloat(scrollerUl.css('right'));
//     var ulwidth = parseFloat(scrollerUl.css('width'));
//     var limit = 1059-ulwidth;
//
//     if (dir == 'prev') {
//         if (ulRight != 0){
//             ulRight += 1059;
//             $('.swiper-next-btn').removeClass('swiper-btn=disabled');
//         }
//         else{
//             $('.swiper-prev-btn').addClass('swiper-btn-disabled');
//         }
//     }
//     if (dir == 'next') {
//         if (ulRight == limit){
//             $('.swiper-next-btn').addClass('swiper-btn-disabled');
//         }else{
//             ulRight -= 1059;
//             $('.swiper-prev-btn').removeClass('swiper-btn-disabled');
//             $('.swiper-next-btn').removeClass('swiper-btn-disabled');
//         }
//
//     }
//     scrollerUl.animate({right: ulRight}, 1000, 'swing');
// }
//
// $('.swiper-next-btn').click(function () {
//     scroll('next');
//
// });
// $('.swiper-prev-btn').click(function () {
//     scroll('prev');
//
// });


// $(document).ready(function() {
//
//     $(".back2Top").click(function(event) {
//         event.preventDefault();
//         $("html, body").animate({ scrollTop: 0 }, "slow");
//         return false;
//     });
//     // ///////////////
//     $(".scrollTo").on('click', function(event) {
//         event.preventDefault();
//
//         var target = $(this).attr('href');
//
//         $('html, body').animate({
//             scrollTop: ($(target).offset().top)
//         }, 700);
//     });
//
// });
$(window).scroll(function () {

    var height = $(window).scrollTop();

    if (height > 500) {
        $('.back2Top').fadeIn();
        $('.back2Top > img').fadeIn();
    } else {
        $('.back2Top').fadeOut();
        $('.back2Top > img').fadeOut();
    }

});

$(document).ready(function () {

    $(".back2Top").click(function (event) {
        event.preventDefault();
        $("html, body").animate({scrollTop: 0}, "slow");
        return false;
    });
    // ///////////////
    $(".scrollTo").on('click', function (event) {
        event.preventDefault();

        var target = $(this).attr('href');

        $('html, body').animate({
            scrollTop: ($(target).offset().top)
        }, 700);
    });

});