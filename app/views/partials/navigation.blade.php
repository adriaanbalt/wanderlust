<div id='navigation'>
	<a class='menu black' href='javascript:void(0);'></a>
	<a class='menu white hidden' href='javascript:void(0);'></a>
	<nav class='hidden'>
@foreach( $navigation as $item )
		<a href="/{{ $item['slug'] }}" class=''>
			<div class='valign'></div>
			<div class='item vcontent'>{{ $item['title'] }}</div>
		</a>
@endforeach
	</nav>
	<!--
	<div>
		<select id="searchbox" name="q" placeholder="Search products or categories..." class="form-control"></select>
	</div>
	-->
</div>