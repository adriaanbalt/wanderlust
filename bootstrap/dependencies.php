<?php

function debug ( $arg ) {
	$data = print_r( $arg, true );
	file_put_contents( '/Users/adriaan.scholvinck/PROJECTS/BALT/wanderlust-site/wanderlust/logs/temp.log', $data, FILE_APPEND );

	file_put_contents( '/Users/adriaan.scholvinck/PROJECTS/BALT/wanderlust-site/wanderlust/logs/temp.log', "-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-\n\n\n\n\n\n\n\n\n\n\n\n", FILE_APPEND );
}
