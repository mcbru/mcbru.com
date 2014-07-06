
(function($) {
	//
	// all Javascript code goes here
	/*$('.hero .rotator ol').bxSlider({
		pager: false,
		ease: 'ease-in',
		useCSS: false
	});*/

	var $rout 	= '/wp-content/themes/mcb-v1/inc/';

	function rollMe($me) {
		$go = $me.parent().offset().top;
		$("html, body").stop(true).animate({ scrollTop: ($go)+"px" });
	}

	// var mem_set;
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

	function load_jax($val,$temp) 	{

		console.log("ajax load fired");
		$('.load-cloak').show();

		$.ajax({

			url: $loca + $rout + $temp,
			type: 'POST',
			dataType:'html',
			data: { 	i: $val 	},

			complete: function(xhr, textStatus) { 	},

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

			error: function(xhr, textStatus, errorThrown) { 	alert(errorThrown); 	}

		}); 
	}



	$.address.strict(false);

	$.address.change(function(event) {
		// console.log($.address.baseURL());
		// var $d = $(this).attr('data-id');
		if((change_flag == true) && (event.value)) {
			//alert('whut');
			var url = $.address.baseURL();
			var url_param_n = url.lastIndexOf('/');
			var url_param = url.substring(url_param_n + 1);

			//
			//

			//alert(goTo);
			
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
			}
			// load_jax(event.value,'proj-req.php');
			change_flag = false;
		} else if(change_flag == true) {
			$('.tucker').slideDown(function() {
				//rollMe(mem_set);
			});
			$('.float-wrap').slideUp();

		}
		// mem_set = $(this).parent().parent();
		// e.preventDefault();
	});



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
	}
	work_tiles();


	$('.work .tile .cta').on('click', function(e) {
		// console.log($(this));
		var $d = $(this).attr('data-id');
		var $n = $(this).attr('data-slug');
		change_flag = false;
		$.address.value($n);
		if($(this).hasClass('work')) {
			load_jax($d,'proj-req.php');
		} else if ($(this).hasClass('cs')) {
			load_jax($d,'cs-req.php');
		}
		// mem_set = $(this).parent().parent();
		e.preventDefault();
	});

	$('.about .tile .cta').on('click', function(e) {
		var $d = $(this).parent().parent().attr('data-id');
		var $n = $(this).parent().parent().attr('data-slug');
		change_flag = false;
		$.address.value($n);
		load_jax($d,'team-req.php');
		// mem_set = $(this).parent().parent();
		e.preventDefault();
		// $('.tucker').slideUp();
		// $('.float-wrap').slideDown(function() {
		// 	rollMe($('.float-wrap'));
		// });
		// mem_set = $(this);
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
	//var mnav_open = false;

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



			// var init = true, 
			//     state = window.history.pushState !== undefined;
			
			// // Handles response
			// var handler = function(XMLHttpRequest, textStatus) {
			//     var data = $.parseJSON(XMLHttpRequest.responseText);
			//     $.address.title(data.title);
			//     $('.content').html(data.content);
			//     $('.page').show();
			// };
			
			// $.address.state('/').init(function(event) {

			//     // Initializes the plugin
			//     $('.tile .cta0').address();
				
			// }).change(function(event) {

			//     var value = $.address.state().replace(/^\/$/, '') + event.value;
				
			//     // Selects the proper navigation link
			//     $('.tile .cta0').each(function() {
			//         if ($(this).attr('href') == value) {
			//             $(this).addClass('selected').focus();
			//         } else {
			//             $(this).removeClass('selected');
			//         }
			//     });
				
			//     if (state && init) {
				
			//         init = false;
				
			//     } else {
				
			//         // Loads and populates the page data
			//         $.ajax({
			//             cache: false,
			//             complete: handler,
			//             url: value
			//         });
			//     }
				
			// });

			// if (!state) {
			
			//     // Hides the page during initialization
			//     document.write('<style type="text/css"> .page { display: none; } </style>');
			// }
			




})(jQuery);
