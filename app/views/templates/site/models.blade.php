@section('content')
<div id='models'>
	<ul id='grid' class='clearfix' data-columns>
@foreach( $data as $item )
		<li>
			<a href="{{ $pageName }}/{{ $item->model->slug }}">
				<div class='hover'>
					<span class='valign'></span>
					<p class='vcontent'>{{ $item->model->name }}</p>
				</div>
				<div class='img-container'>
					<img src="{{ URL::asset( $item->cover->path ) }}"/>
				</div>
				<p class='name'>{{ $item->model->name }}</p>
			</a>
		</li>
@endforeach
	</ul>
</div>
@stop
