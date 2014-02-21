@section('content')
<h1>about</h1>
@foreach( $data as $item )
	<li>
		<a href="rookies/{{ $item['slug'] }}">
			<img src="{{ URL::asset( $item->cover->path ) }}"/>
			<p>{{ $item['name'] }}</p>
		</a>
	</li>
@endforeach
@stop
