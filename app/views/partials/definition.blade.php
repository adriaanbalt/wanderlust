
<img class='logo-black' src="{{ URL::asset( 'images/logo-black.svg' ) }}"/>
<div id='definition'>
@foreach( $data as $item )
	<p>{{ $item['row'] }}</p>
@endforeach
</div>
