@section('content')
<h1>TALENT</h1>
	<u>
	@foreach( $data as $item )
		<li>
			<img src="{{ $item->getCover() }}"/>
			<a href="some-girls/{{ $item['slug'] }}">{{ $item['name'] }}</a>
		</li>
	@endforeach
	</ul>
@stop