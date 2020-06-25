
jQuery(function ($) {
  // $(document).ready(function () {
    

  // });
  window.addEventListener("scroll", bringmenu);

  function bringmenu() {
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
      $('#nav-cta-wrapper').addClass('navbar-transform');
    } else {
      $('#nav-cta-wrapper').removeClass('navbar-transform');
    }
  }

  $('.navbar-toggler').on('click', function () {
    $(this).toggleClass("is-active");
    if ($(this).hasClass('open')) {
      $('.navbar-toggler').removeClass('open');
      $('ul').removeClass('show');
    } else {
      $('ul').addClass('show');
      $(this).addClass('open');
    }
  })

  $('.close-banner').on('click', function () {
    $('#notification-banner').hide();
  })

  let countImpact = function(impactId, delay) {
    console.log('impact id', impactId)
    var $this = impactId,
      countTo = $this.attr('data-impactnum');
    $this.addClass('animate')
    $({
      countNum: $this.text()
    }).delay(delay).animate({
        countNum: countTo
      },
  
      {
        duration: 2000,
        easing: 'linear',
        step: function() {
          $this.text(commaSeparateNumber(Math.floor(this.countNum)));
        },
        complete: function() {
          $this.text(commaSeparateNumber(this.countNum));
          //alert('finished');
        }
      }
    );
  }

  countImpact($('.timerOne'), 0)
  countImpact($('.timerTwo'), 1000)
  countImpact($('.timerThree'), 2000)

  
  function commaSeparateNumber(val) {
    while (/(\d+)(\d{3})/.test(val.toString())) {
      val = val.toString().replace(/(\d+)(\d{3})/, '$1' + ',' + '$2');
    }
    return val;
  }

});
