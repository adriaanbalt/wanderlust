@section('content')
<h1>TALENT</h1>
	<u>
	@foreach( $data as $item )
		<li>
			<a href="talent/{{ $item['slug'] }}">{{ $item['name'] }}</a>
<div>{{ print_r($item) }}</div>
		</li>
	@endforeach
	</ul>

@stop
