@section('content')
<div id='content' class='mauve'>
@include('partials.logo')
@include('partials.navigation', array('status'=>'closed'))

<div id='about'>
	<ul>
@foreach( $data as $item )
		<li>
			<p>{{ $item['paragraph'] }}</p>
		</li>
@endforeach
	</ul>
</div>

@include('partials.definition')
@include('partials.footer')
</div>
@stop