<!DOCTYPE html>
<html lang="en" ng-app="Brunch">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('title')

    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
	<link href="{{ asset('css/custom.css') }}" rel="stylesheet" media="screen" />
	<link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet">
	<link href="{{ asset('css/owl.theme.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
	{{-- <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400" rel="stylesheet"> --}}
 	
 	@yield('head')
	
	<script>
		function openNav() {
			document.getElementById("myNav").style.width = "100%";
		}

		function closeNav() {
			document.getElementById("myNav").style.width = "0%";
		}
	</script>
</head>
<body ng-cloak>
    @yield('top')
    @yield('content')
    
	<script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.touchSwipe.min.js') }}"></script>
	<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap-select.min.js') }}"></script>
	<script src="{{ asset('js/jquery-ui.js') }}"></script>
	<script src="{{ asset('js/vendor/angular.min.js') }}"></script>
	<script src="{{ asset("js/app.js") }}"></script>
	<script src="{{ asset('js/services/TimezoneService.js') }}"></script>
	<script src="https://js.pusher.com/3.2/pusher.min.js"></script>
	
	<script>
		$(document).ready(function () {
			$(".carousel").swipe({

			  swipe: function(event, direction, distance, duration, fingerCount, fingerData) {

				if (direction == 'left') $(this).carousel('next');
				if (direction == 'right') $(this).carousel('prev');

			  },
			  allowPageScroll:"vertical"

			});
		
			$( "#datepicker" ).datepicker({ beforeShow: function(input, obj) {
				$('#display_cal').html($(input).datepicker('widget'));
					obj.dpDiv.css({position:'relative',top:'',left:'',});
			}
			});
			$("#owl-demo").owlCarousel({
				items:2,
				navigation : false,
				pagination: true
			});
			
			$("#owl-content").owlCarousel({
				items:2,
				navigation : false,
				pagination: true
			});
			
			$('.selecttimezone').selectpicker({
			  style: 'btn-info',
			  size: 4
			});
		});
    </script>
	
	<script>
		$('#inviteFriendCarousel').carousel({
			  interval: 10000
		});
		
		$(".leftfriendcar").click(function(){
			$("#inviteFriendCarousel").carousel("prev");
		});
		
		$(".nextfriendcar").click(function(){
			$("#inviteFriendCarousel").carousel("next");
		});	
	</script>
    @yield('footer')
</body>
</html>