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
Editor::inst( $db, 'faculty_attendance','faculty_attendance_id' )
	->fields(
		Field::inst( 'faculty_attendance_id' ),
		Field::inst( 'schedule_id' )
			->options( Options::inst()
    	    ->table( 'schedules' )
    	    ->value( 'schedule_id' ))
    		->validator( Validate::dbValues() )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) ),
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
		Field::inst( 'date' )
			->validator( Validate::dateFormat( 'Y-m-d H:i:s' ) )
				->getFormatter( Format::dateSqlToFormat( 'Y-m-d H:i:s' ) )
				->setFormatter( Format::dateFormatToSql('Y-m-d H:i:s' ) )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) ),
		Field::inst( 'day' )
			->validator( Validate::numeric() )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) ),
		Field::inst( 'status' )
			->validator( Validate::numeric() )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) ),
		Field::inst( 'reason' )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) )
	)
	->process( $_POST )
	->json();
