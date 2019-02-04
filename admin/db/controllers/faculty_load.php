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
Editor::inst( $db, 'faculty_load','faculty_load_id' )
	->fields(
		Field::inst( 'faculty_load_id' ),
		Field::inst( 'faculty_id' )
			->options( Options::inst()
    	    ->table( 'faculty' )
    	    ->value( 'faculty_id' ))
    		->validator( Validate::dbValues() )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) ),
		Field::inst( 'ay_id' )
			->options( Options::inst()
    	    ->table( 'academic_year' )
    	    ->value( 'ay_id' ))
    		->validator( Validate::dbValues() )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) ),
		Field::inst( 'semester_id' )
			->options( Options::inst()
    	    ->table( 'semesters' )
    	    ->value( 'semester_id' ))
    		->validator( Validate::dbValues() )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) ),
		Field::inst( 'total_unit_load' )
			->validator( Validate::numeric() )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) ),
		Field::inst( 'unit_load_taken' )
			->validator( Validate::numeric() )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) ),
		Field::inst( 'unit_load_avail' )
			->validator( Validate::numeric() )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) ),
		Field::inst( 'year' )
			->validator( Validate::numeric() )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) ),
		Field::inst( 'load_encoder' )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) ),
		Field::inst( 'approved' )
			->validator( Validate::numeric() )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) )
	)
	->process( $_POST )
	->json();
