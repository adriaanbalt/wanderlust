@section('content')
<div class='models'>
	<h1>rookies</h1>
	<ul>
@foreach( $data as $item )
		<li>
			<a href="rookies/{{ $item['slug'] }}">
				<img src="{{ URL::asset( $item->cover->path ) }}"/>
				<p>{{ $item['name'] }}</p>
			</a>
		</li>
@endforeach
	</ul>
</div>
@stop
