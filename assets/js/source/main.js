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

	var mem_set;

	function arm_close() {
		$('a#close').on('click', function(e) {
			e.preventDefault();
			$('.tucker').slideDown(function() {
				//rollMe(mem_set);
			});
			$('.float-wrap').slideUp();
			
		});
	}

	function load_jax($val,$temp) 	{

		$.ajax({

			url: $loca + $rout + $temp,
			type: 'POST',
			dataType:'html',
			data: { 	i: $val 	},

			complete: function(xhr, textStatus) { 	},

			success: function(data, textStatus, xhr) {
				$('.float-wrap').html('').html(data);
				$('.tucker').slideUp();
				$('.float-wrap').hide().slideDown(function() {
					rollMe($('.float-wrap'));
					work_tiles();
					arm_close();
				});
			},

			error: function(xhr, textStatus, errorThrown) { 	alert(errorThrown); 	}

		}); 
	}

	function work_tiles() {
		$('.rels .tile .cta.work').on('click', function(e) {
			var $d = $(this).attr('data-id');
			load_jax($d,'proj-req.php');
			mem_set = $(this).parent().parent();
			e.preventDefault();
		});
		$('.rels .tile .cta.cs').on('click', function(e) {
			var $d = $(this).attr('data-id');
			load_jax($d,'cs-req.php');
			mem_set = $(this).parent().parent();
			e.preventDefault();
		});
	}
	work_tiles();

		$('.work .tile .cta.work').on('click', function(e) {
			var $d = $(this).attr('data-id');
			load_jax($d,'proj-req.php');
			mem_set = $(this).parent().parent();
			e.preventDefault();
		});
		$('.work .tile .cta.cs').on('click', function(e) {
			var $d = $(this).attr('data-id');
			load_jax($d,'cs-req.php');
			mem_set = $(this).parent().parent();
			e.preventDefault();
		});

	$('.about .tile .cta').on('click', function(e) {
		var $d = $(this).parent().parent().attr('data-id');
		load_jax($d,'team-req.php');
		mem_set = $(this).parent().parent();
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
		$('.cloak').fadeOut();
	});

	//var mnav_open = false;

	$('.header .toggle').on('click',function(e) {
		e.preventDefault();
		$('.header .mobile ul').slideToggle();
	});

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
