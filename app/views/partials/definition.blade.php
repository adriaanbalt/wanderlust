
<img class='logo' src="{{ URL::asset( 'images/logo-black.svg' ) }}"/>
<div id='definition'>
@foreach( $data as $item )
	<p>{{ $item['row'] }}</p>
@endforeach
</div>
