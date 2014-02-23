@section('content')
<div id='models'>
	<ul id='grid' class='clearfix' data-columns>
@foreach( $data as $item )
		<li>
			<a href="{{ Request::segment(1) }}/{{ $item['slug'] }}">
				<img src="{{ URL::asset( $item->cover->path ) }}"/>
				<!-- <p>{{ $item['name'] }}</p> -->
			</a>
		</li>
@endforeach
	</ul>
</div>
@stop
