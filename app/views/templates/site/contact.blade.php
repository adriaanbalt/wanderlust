@section('content')
<h1>contact</h1>
@foreach( $data as $item )
<div>
	<p class='address'>{{ $item->address }}</p>
	<p class='telephone'>
		<a href='tel:{{ $item->telephone }}'>{{ $item->telephone }}</a>
	</p>
	<p class='fax'>
		<a href='tel:{{ $item->telephone }}'>{{ $item->fax }}</a>
	</p>
	<p class='email'>
		<a href='mailto:{{ $item->email }}'>{{ $item->email }}</a>
	</p>
</div>
@endforeach
@stop
