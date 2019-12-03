

$(document).ready(function(){
    $('.single-item').slick({
      dots: true,
      infinite: true,
      speed: 500,
      fade: true,
      cssEase: 'linear',
      autoplay: true,
      autoplaySpeed: 3000,
    });
  });

　
$(function(){
    $('.send')
        .on('mouseover', function(){
            $('button').stop(true).animate({
                borderWidth: '7px',
                fontWeight: '600'
            }, 300);
        })
        .on('mouseout', function(){
            $('button').stop(true).animate({
                borderWidth: '1px',
                fontWeight: '200'
            }, 300);
        });
});

$('.ml2').each(function(){
    $(this).html($(this).text().replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>"));
  });
  
  anime.timeline({loop: true})
    .add({
      targets: '.ml2 .letter',
      scale: [4,1],
      opacity: [0,1],
      translateZ: 0,
      easing: "easeOutExpo",
      duration: 950,
      delay: function(el, i) {
        return 70*i;
      }
    }).add({
      targets: '.ml2',
      opacity: 0,
      duration: 1000,
      easing: "easeOutExpo",
      delay: 1000
    });






