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
Editor::inst( $db, 'block_info','block_info_id' )
	->fields(
		Field::inst( 'block_info_id' ),
		Field::inst( 'stdnt_info_id' )
			->options( Options::inst()
    	    ->table( 'stdnt_info' )
    	    ->value( 'stdnt_info_id' ))
    		->validator( Validate::dbValues() )
    		->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) ),
		Field::inst( 'block_id' )
			->options( Options::inst()
    	    ->table( 'block' )
    	    ->value( 'block_id' ))
    		->validator( Validate::dbValues() ),
		Field::inst( 'ay_id' )
			->options( Options::inst()
    	    ->table( 'academic_year' )
    	    ->value( 'ay_id' ))
    		->validator( Validate::dbValues() )
	)
	->process( $_POST )
	->json();
