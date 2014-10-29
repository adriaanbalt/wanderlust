<div id='navigation' class='{{ $status }}'>
	<nav>
@foreach( $navigation as $item )
		<a href="/wanderlust/{{ $item['slug'] }}" class=''>
			<div class='valign'></div>
			<div class='item vcontent'>{{ $item['title'] }}</div>
		</a>
@endforeach
	</nav>
</div>