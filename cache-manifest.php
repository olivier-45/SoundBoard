<?php
$base_dir = dirname( __FILE__ ) . '/';
include $base_dir . 'inc/main.php';

$version = md5( "0.1".serialize( $mp3_list ) );


header( "Cache-Control: max-age=0, no-cache, no-store, must-revalidate" );
header( "Pragma: no-cache" );
header( "Expires: Wed, 11 Jan 1984 05:00:00 GMT" );
header( 'Content-type: text/cache-manifest' );

echo "CACHE MANIFEST\n";
echo "# Version ".$version."\n";
echo "\nCACHE:\n";

// Assets
echo 'assets/css/style.css'."\n";
echo 'assets/js/mootools.js'."\n";
echo 'assets/js/global.js'."\n";

// MP3 List
foreach ( $mp3_list as $mp3 ) {
    echo $mp3_path.$mp3['file']."\n";
}

// Network
echo "\nNETWORK:\n*";