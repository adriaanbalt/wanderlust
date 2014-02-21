@section('content')
<div id='about'>
	<h1>about</h1>
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
