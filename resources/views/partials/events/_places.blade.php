<style type="text/css">
	.slide-content-item { margin-right: 2em; }
</style>

<div class="row">
	<div id="owl-content" class="owl-carousel">
		@foreach ($places as $place)
			<div class="slide-content-item">
				<img src="images/{{ $place->ImageThumbNail }}" alt="slide1" class="img-responsive" />
				<div class="slide-title" value="{{ $place->IDPlace }}" ng-click="getPlaceID($event)">
					<h2><span>{{ $place->PlaceName }}</span></h2>
				</div>
			</div>
		@endforeach
	</div>
</div>
