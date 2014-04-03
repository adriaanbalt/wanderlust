@section('content')
<div id='content' class='mauve'>
@include('partials.logo')
@include('partials.navigation', array('status'=>'closed'))

<div id='contact'>
@foreach( $data as $item )
	<div>
		<p>{{ $item->name }}</p>
		<p>{{ $item->address }}</p>
		<p>
			<a href='tel:{{ $item->telephone }}'>{{ $item->telephone }}</a>
		</p>
		<p>
			<a href='tel:{{ $item->telephone }}'>{{ $item->fax }}</a>
		</p>
		<p>
			<a href='mailto:{{ $item->email }}'>{{ $item->email }}</a>
		</p>
	</div>
@endforeach
</div>

@include('partials.definition')
@include('partials.footer')
</div>
@stop