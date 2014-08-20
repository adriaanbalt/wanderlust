@section('content')
<div id='models'>
	<ul id='grid' class='clearfix wrapper' data-columns>
@foreach( $data as $item )
		<li>
			<a href="{{ Request::segment(1) }}/{{ $item->model->slug }}">
				<div class='mask'>
					<img src="{{ URL::asset( $item->cover->path ) }}"/>
				</div>
				<div class='name'>
					<div class='valign'></div>
					<p class='vcontent'>{{ $item->model->name }}</p>
				</div>
			</a>
		</li>
@endforeach
	</ul>
</div>
@stop
