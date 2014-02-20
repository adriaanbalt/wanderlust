@section('content')
<h1>some girls</h1>
	<ul>
@foreach( $data as $item )
		<li>
			<a href="some-girls/{{ $item['slug'] }}">
				<img src="{{ URL::asset( $item->cover->path ) }}"/>
				<p>{{ $item['name'] }}</p>
			</a>
		</li>
@endforeach
	</ul>
@stop
