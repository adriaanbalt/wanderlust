@section('content')
<div id='models'>
	<ul id='grid' data-columns>
@foreach( $data as $item )
		<li>
			<!-- <img src="{{ URL::asset( $item->cover->path ) }}"/> -->
		</li>
@endforeach
	</ul>
</div>
@stop
