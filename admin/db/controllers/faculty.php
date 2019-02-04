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
Editor::inst( $db, 'faculty','faculty_id' )
	->fields(
		Field::inst( 'faculty_id' ),
		Field::inst( 'person_id' )
			->options( Options::inst()
    	    ->table( 'person' )
    	    ->value( 'person_id' ))
    		->validator( Validate::dbValues() )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) ),
		Field::inst( 'dept_id' )
			->options( Options::inst()
    	    ->table( 'dept' )
    	    ->value( 'dept_id' ))
    		->validator( Validate::dbValues() )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) ),
		Field::inst( 'faculty_load_id' )
			->options( Options::inst()
    	    ->table( 'faculty_load' )
    	    ->value( 'faculty_load_id' ))
    		->validator( Validate::dbValues() )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) ),
		Field::inst( 'college_id' )
			->options( Options::inst()
    	    ->table( 'colleges' )
    	    ->value( 'college_id' ))
    		->validator( Validate::dbValues() )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) ),
		Field::inst( 'profile_pic' )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) ),
		Field::inst( 'age' )
			->validator( Validate::numeric() )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) ),
		Field::inst( 'position' )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) ),
		Field::inst( 'type' )
			->validator( Validate::numeric() )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) ),
		Field::inst( 'status' )
			->validator( Validate::numeric() )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) )
	)
	->process( $_POST )
	->json();
