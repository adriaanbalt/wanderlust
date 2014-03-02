@section('content')
<div id='details'>
	<h2>{{ $name }}</h2>
	<div class='stats'>
		<p>Height: <span>{{ $height }}</span></p>
		<p>Bust: <span>{{ $bust }}</span></p>
		<p>Hips: <span>{{ $hips }}</span></p>
		<p>Waist: <span>{{ $waist }}</span></p>
		<p>Eyes: <span>{{ $eyes }}</span></p>
		<p>Hair: <span>{{ $hair }}</span></p>
		<p>Shoes: <span>{{ $shoes }}</span></p>
	</div>
	<ul>
<?php
	$index = 0;
?>
@foreach( $photos as $item )
	@if ($index%2 == 0 && $index == 0)
		<li class='clearfix'>
			<div class='empty'></div>
	@elseif ($index%2 == 0)
		<li class='clearfix hidden'>
			<a class='previousBtn' href='javascript:void(0);'>
				<img src="{{ URL::asset( $item->path ) }}"/>
			</a>
	@elseif ($index%2 == 1)
			<a class='nextBtn' href='javascript:void(0);'>
				<img src="{{ URL::asset( $item->path ) }}"/>
			</a>
		</li>
	@endif
	<?php $index++; ?>
@endforeach
	</ul>
</div>
@stop
