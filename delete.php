<?php
include( 'inc/database.php' );
$current_id = $_GET['id'];

$delete = delete_post( $current_id );

if ( $delete ) {
	header( 'Location: index.php' );
} else {
	echo "Something went wrong! Try again later.";
}