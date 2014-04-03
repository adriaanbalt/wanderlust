@section('content')
<div id='content'>
@include('partials.logo')
@include('partials.navigation', array('status'=>'closed'))
<div id='models'>
	<ul id='grid' class='clearfix' data-columns>
@foreach( $data as $item )
		<li>
			<a href="{{ Request::segment(1) }}/{{ $item->model->slug }}">
				<img src="{{ URL::asset( $item->cover->path ) }}"/>
				<div>
					<div class='valign'></div>
					<p class='vcontent'>{{ $item->model->name }}</p>
				</div>
			</a>
		</li>
@endforeach
	</ul>
</div>
@include('partials.definition')
@include('partials.footer')
</div>
@stop