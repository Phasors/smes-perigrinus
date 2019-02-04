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
Editor::inst( $db, 'student_applicants_docu','stdnt_appli_docu_id' )
	->fields(
		Field::inst( 'stdnt_appli_docu_id' ),
		Field::inst( 'stdnt_appli_id' )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) )
			->options( Options::inst()
    	    ->table( 'student_applicants' )
    	    ->value( 'stdnt_appli_id' ))
    		->validator( Validate::dbValues() ),
		Field::inst( 'form' )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) ),
		Field::inst( 'status' )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) )
			->validator( Validate::numeric() ),
		Field::inst( 'receiver' )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) )
	)
	->process( $_POST )
	->json();
