<?php

$from_file = __DIR__ . '/sourse-font.css';
$dest_file = __DIR__ . '/result-font.css';

echo "from: $from_file\ndest:$dest_file\n";
$source_content = file_get_contents( $from_file );

$content = preg_replace_callback( '~(src: url\()(https://[^)]+)([^\n]+)~', 'replacer', $source_content );

file_put_contents( $dest_file, $content );


function replacer( $match ){

	[ $full, $before, $url, $after ] = $match;

	$ext = pathinfo( $url )['extension'];

	$data = HTTP_get( $url );
	$data = base64_encode( $data );

	return
		"/* $full */\n" .
	    "\t" . $before . "data:application/font-$ext;charset=utf-8;base64,$data" . $after;
}


function HTTP_get( $url ){

	$curl = curl_init();

	curl_setopt_array( $curl, [
		CURLOPT_URL            => $url,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING       => '',
		CURLOPT_MAXREDIRS      => 10,
		CURLOPT_TIMEOUT        => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST  => 'GET',
	] );

	$response = curl_exec( $curl );

	curl_close( $curl );

	return $response;
}