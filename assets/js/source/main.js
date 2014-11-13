
(function($) {

  var $rout   = '/wp-content/themes/mcb-v1/inc/';


  function rollMe($me) {
    $go = $me.parent().offset().top;
    $("html, body").stop(true).animate({ scrollTop: ($go)+"px" });
  }

  var change_flag = true;


  function arm_close() {
    $('a#close').on('click', function(e) {
      e.preventDefault();
      $('.tucker').slideDown(function() {
        //rollMe(mem_set);
      });
      $('.float-wrap').slideUp();
      $.address.value('');
    });
  }


  function load_jax($val,$temp)   {

    console.log("ajax load fired");
    // console.log($val);
    // console.log($temp);
    $('.load-cloak').show();

    $.ajax({

      url: $loca + $rout + $temp,
      type: 'POST',
      dataType:'html',
      data: {   i: $val   },

      complete: function(xhr, textStatus) {   },

      success: function(data, textStatus, xhr) {
        change_flag = true;
        $('.load-cloak').hide();
        $('.float-wrap').html('').html(data);
        $('.tucker').slideUp();
        $('.float-wrap').hide().slideDown(function() {
          rollMe($('.head-it'));
          work_tiles();
          arm_close();
        });
      },

      error: function(xhr, textStatus, errorThrown) {   alert(errorThrown);   }

    });
  }

  $.address.strict(false);

  $.address.change(function(event) {

    if((change_flag == true) && (event.value)) {

      var url = $.address.baseURL();
      var url_param_n = url.lastIndexOf('/');
      var url_param = url.substring(url_param_n + 1);

      console.log(url_param);
      switch(url_param) {
        case "work":
          var tmpl;
          var targg = $('.cta[data-slug="'+event.value+'"]');
          if(targg.hasClass('cs')) {
            tmpl = 'cs-req.php';
          }
          if(targg.hasClass('work')) {
            tmpl = 'proj-req.php';
          }
          var goToW = targg.attr('data-id');

          load_jax(goToW,tmpl);
        break;
        case "about":
          var goToA = $('.tile[data-slug="'+event.value+'"]').attr('data-id');
          load_jax(goToA,'team-req.php');
        break;
        case "services":
          var tmpl,
          targg = $('[data-slug="'+event.value+'"]'),
          goToS = $('[data-slug="'+event.value+'"]').attr('data-id');
          if(targg.hasClass('dta')) {
            tmpl = 'cs-req.php';
          } else {
            tmpl = 'serv-req.php';
          }

          load_jax(goToS,tmpl);

        break;
      }

      change_flag = false;
    } else if(change_flag == true) {
      $('.tucker').slideDown(function() {
        //rollMe(mem_set);
      });
      $('.float-wrap').slideUp();

    }

  });


  /*
  function work_tiles() {
    $('.rels .tile .cta').on('click', function(e) {
      var $d = $(this).attr('data-id');
      var $n = $(this).attr('data-slug');
      change_flag = false;
      $.address.value($n);
      if($(this).hasClass('work')) {
        load_jax($d,'proj-req.php');
      } else if ($(this).hasClass('cs')) {
        load_jax($d,'cs-req.php');
      }
      e.preventDefault();
    });
    $('.rels .tile.cs').on('click', function(e) {
      var $d = $(this).attr('data-id');
      var $n = $(this).attr('data-slug');
      change_flag = false;
      $.address.value($n);
      load_jax($d,'cs-req.php');
      e.preventDefault();
    });
  }
  work_tiles();


  $('.work .tile .cta').on('click', function(e) {

    var $d = $(this).attr('data-id');
    var $n = $(this).attr('data-slug');
    change_flag = false;
    $.address.value($n);
    if($(this).hasClass('work')) {
      load_jax($d,'proj-req.php');
    } else if ($(this).hasClass('cs')) {
      load_jax($d,'cs-req.php');
    }
    e.preventDefault();
  });
  */


  $('.about .tile .cta').on('click', function(e) {
    var $d = $(this).parent().parent().attr('data-id');
    var $n = $(this).parent().parent().attr('data-slug');
    change_flag = false;
    $.address.value($n);
    load_jax($d,'team-req.php');
    e.preventDefault();
  });


  $('.serv .tile').on('click', function(e) {
    var $d = $(this).attr('data-id');
    var $n = $(this).attr('data-slug');
    change_flag = false;
    $.address.value($n);
    load_jax($d,'serv-req.php');
    e.preventDefault();
  });


  $('.cloaker').on('click', function(e) {
    e.preventDefault();
    $('.cloak').fadeIn(function() {
      rollMe($('.form-pop'));
    });
  });


  $('.cloak .close').on('click', function(e) {
    e.preventDefault();
    $('.cloak').fadeOut(function() {
      $('.form-pop').show();
      $('.form-confirmation').hide();
    });
  });


  function mail_sent() {
    console.log('mail_sent seen');
  }


  $('.header .toggle').on('click',function(e) {
    e.preventDefault();
    $('.header .mobile ul').slideToggle();
  });


  if($('.page-services').length>0) {
    $check = $(window).width();
    if($check<768) {
      $('.page-services .row.stacs .content > div:not(:first-child)').hide();
      $('.mobile.service-menu li:first-child').addClass('open');
      $('.mobile.service-menu li').on('click', function() {
        $('.mobile.service-menu li.open').removeClass('open');
        $(this).addClass('open');
        $('.page-services .row.stacs .content > div').hide();
        $('.page-services .row.stacs .content > div').eq($(this).index()).slideDown(function() {
          rollMe($('.tiles.mobile li'));
        });
      });
    }
  }

  if($('.job-trig').length>0) {
    $('.tucc').hide();
    $('.job-trig').on('click',function() {
      $targ = $(this).find('.go');
      //alert($targ);
      if(!$(this).next().is(':visible')) {
        $('.tucc:visible').slideUp();
        $(this).next().slideDown(function() {
          rollMe($targ);
        });
      } else {
        $(this).next().slideUp();
      }
    });
  }


/**
 * Instagram feed
 * http://instafeedjs.com/
 */
  var userFeed = new Instafeed({
    get: 'user',
    userId: 276323042,
    accessToken: '734615590.467ede5.7230bbdba9d54095897cf7bdb1d723b4',
    target: 'iggy',
    limit: 4,
    resolution: 'low_resolution',
    after: function() {
      $('#iggy a').attr('target','_blank');
    },
    template: '<a href="{{link}}"><img src="{{image}}" /></a>'
  });
  userFeed.run();

})(jQuery);
