<footer>
	<p class='telephone'>
		<a href='tel:{{ $data->telephone }}'>{{ $data->telephone }}</a>
	</p>
	<p class='fax'>
		<a href='tel:{{ $data->telephone }}'>{{ $data->fax }}</a>
	</p>
	<p class='email'>
		<a href='mailto:{{ $data->email }}'>{{ $data->email }}</a>
	</p>
	<p><?php echo date("Y"); ?></p>
	<p class='balt'>
		<a href='http://balt.us' target='_blank'>website by BALT<!--<img src="{{ URL::asset( 'images/BALT.svg' ) }}"/>--></a>
	</p>
</footer>