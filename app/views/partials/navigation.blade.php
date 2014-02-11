<nav>
	<ul>
	@foreach( $navigation as $item )
		<li>
			<a href="/{{ $item['url'] }}" class='{{ $item['color_id'] }}'>
				<div class='item'>{{ $item['title'] }}</div>
			</a>
		</li>
	@endforeach
	</ul>
</nav>
<div>
	<select id="searchbox" name="q" placeholder="Search products or categories..." class="form-control"></select>
</div>