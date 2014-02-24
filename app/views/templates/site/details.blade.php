@section('content')
<div id='details'>
	<h2>{{ $name }}</h2>
	<ul>
@foreach( $data as $item )
		<li>
			<img src="{{ URL::asset( $item->path ) }}"/>
		</li>
@endforeach
	</ul>
</div>
@stop
