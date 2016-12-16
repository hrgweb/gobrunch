<div class="row">
	<div id="owl-content" class="owl-carousel">
		@foreach ($places as $place)
			<div class="slide-content-item">
				<img src="images/{{ $place->ImageThumbNail }}" alt="slide1"/>
				<div class="slide-title" value="{{ $place->IDPlace }}" ng-click="getPlaceID($event)">
					<h2><span>{{ $place->PlaceName }}</span></h2>
				</div>
			</div>
		@endforeach
	</div>
</div>
