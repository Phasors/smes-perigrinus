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
Editor::inst( $db, 'college_applicants','stdnt_appli_id' )
	->fields(
		Field::inst( 'stdnt_appli_id' ),
		Field::inst( 'shs_school' )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) ),
		Field::inst( 'shs_track' )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) ),
		Field::inst( 'jhs' )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) ),
		Field::inst( 'pref_course1' )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) ),
		Field::inst( 'pref_course2' )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) ),
		Field::inst( 'pref_course3' )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) )
	)
	->process( $_POST )
	->json();
