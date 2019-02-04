<?php

/*
 * Example PHP implementation used for the index.html example
 */

// DataTables PHP library
include( "../lib/DataTables.php" );

// Alias Editor classes so they are easy to use
use
	DataTables\Editor,
	DataTables\Editor\Field,
	DataTables\Editor\Format,
	DataTables\Editor\Mjoin,
	DataTables\Editor\Options,
	DataTables\Editor\Upload,
	DataTables\Editor\Validate,
	DataTables\Editor\ValidateOptions;

// Build our Editor instance and process the data coming from _POST
Editor::inst( $db, 'misc_fees','misc_fee_id' )
	->fields(
		Field::inst( 'misc_fee_id' ),
		Field::inst( 'misc_name' )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) ),
		Field::inst( 'misc_cost' )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) )
			->validator( Validate::numeric() ),
		Field::inst( 'misc_desc' )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) )
	)
	->process( $_POST )
	->json();
