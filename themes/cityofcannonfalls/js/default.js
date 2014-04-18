		function rotator() {
			//Set the opacity of all images to 0
			$('div#rotate1 ul li').css({opacity: 0.0});
			$('div#rotate2 ul li').css({opacity: 0.0});

			//Get the first image and display it (gets set to full opacity)
			$('div#rotate1 ul li:first').css({opacity: 1.0});
			$('div#rotate2 ul li:first').css({opacity: 1.0});

			//Call the rotator function to run the slideshow, 6000 = change to next image after 6 seconds
			setTimeout("setInterval('rotate(1)',8000)", 4000);
			setInterval('rotate(2)',8000);
	}

		function rotate(div) {
			//Get the first image
			var current = ($('div#rotate' + div + ' ul li.show')?  $('div#rotate' + div + ' ul li.show') : $('div#rotate' + div + ' ul li:first'));

			//Get next image, when it reaches the end, rotate it back to the first image
			var next = ((current.next().length) ? ((current.next().hasClass('show')) ? $('div#rotate' + div + ' ul li:first') :current.next()) : $('div#rotate' + div + ' ul li:first'));

			//Set the fade in effect for the next image, the show class has higher z-index
			next.css({opacity: 0.0})
			.addClass('show')
			.animate({opacity: 1.0}, 1000);

			//Hide the current image
			current.animate({opacity: 0.0}, 1000)
			.removeClass('show');

		};

		$(document).ready(function() {
			//Load the slideshow
			rotator();
		});

		$(window).load(function() {
			$('div#not_moving img').show('slide', { direction: 'left' }, 700)
			setTimeout("$('.edge').show('slide', { direction: 'right' }, 700)", 500);
		});

	//	$('#menu_departments_list').click(function(){alert('hello');}); //, function{alert('no')}); //.hover(function(){($('#menu_departments_list').show();}, function(){($('#menu_departments_list').show();});
	//	$('#menu_government_list').click(function(){alert('hello');}); //, function{alert('no')}); //.hover(function(){($('#menu_departments_list').show();}, function(){($('#menu_departments_list').show();});

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-32621306-1']);
	  _gaq.push(['_setDomainName', 'inmotionhosting.com']);
	  _gaq.push(['_trackPageview']);

	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

		$('#menu_departments').click(function(){$('#menu_departments_list').slideToggle();}); //, function{alert('no')}); //.hover(function(){($('#menu_departments_list').show();}, function(){($('#menu_departments_list').show();});
		$('#menu_government').click(function(){$('#menu_government_list').slideToggle();}); //, function{alert('no')}); //.hover(function(){($('#menu_government_list').show();}, function(){($('#menu_government_list').show();});
	//	$('#menu_departments').hover(function(){$('#menu_departments_list').show();}, function(){$('#menu_departments_list').hide();}); //, function{alert('no')}); //.hover(function(){($('#menu_departments_list').show();}, function(){($('#menu_departments_list').show();});


				$(document).ready(function() {
//					$('#menu_home').addClass('active');
		});