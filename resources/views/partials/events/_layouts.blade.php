<div class="row">

	{{-- <pre>@{{ inputs | json }}</pre> --}}

	<div id="owl-demo" class="owl-carousel">
		@foreach ($layouts as $layout)
			<div class="slide-item">
				<img src="images/{{ $layout->ThumbImg }}" value="{{ $layout->IDRoomLayout }}" data-number-seat="{{ $layout->NumberOfSeats }}" alt="slide1" ng-click="getLayoutID($event)"/>
			</div>
		@endforeach
	</div>
</div>
