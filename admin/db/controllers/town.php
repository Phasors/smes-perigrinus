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
Editor::inst( $db, 'town','town_id' )
	->fields(
		Field::inst( 'town_id' ),
		Field::inst( 'prov_id' )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) )
			->options( Options::inst()
    	    ->table( 'province' )
    	    ->value( 'prov_id' ))
    		->validator( Validate::dbValues() ),
		Field::inst( 'town_name' )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) )
	)
	->process( $_POST )
	->json();
