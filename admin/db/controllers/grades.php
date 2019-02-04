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
Editor::inst( $db, 'grades','grades_id' )
	->fields(
		Field::inst( 'grades_id' ),
		Field::inst( 'course_id' )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) )
			->options( Options::inst()
    	    ->table( 'courses' )
    	    ->value( 'course_id' ))
    		->validator( Validate::dbValues() ),
		Field::inst( 'course_schedule_id' )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) )
			->options( Options::inst()
    	    ->table( 'course_schedules' )
    	    ->value( 'course_schedule_id' ))
    		->validator( Validate::dbValues() ),
		Field::inst( 'faculty_id' )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) )
			->options( Options::inst()
    	    ->table( 'faculty' )
    	    ->value( 'faculty_id' ))
    		->validator( Validate::dbValues() ),
		Field::inst( 'stdnt_info_id' )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) )
			->options( Options::inst()
    	    ->table( 'stdnt_info' )
    	    ->value( 'stdnt_info_id' ))
    		->validator( Validate::dbValues() ),
		Field::inst( 'schedule_id' )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) )
			->options( Options::inst()
    	    ->table( 'schedules' )
    	    ->value( 'schedule_id' ))
    		->validator( Validate::dbValues() ),
		Field::inst( 'ay_id' )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) )
			->options( Options::inst()
    	    ->table( 'academic_year' )
    	    ->value( 'ay_id' ))
    		->validator( Validate::dbValues() ),
		Field::inst( 'semester_id' )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) )
			->options( Options::inst()
    	    ->table( 'semesters' )
    	    ->value( 'semester_id' ))
    		->validator( Validate::dbValues() ),
		Field::inst( 'prlm_grade' )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) )
			->validator( Validate::numeric() ),
		Field::inst( 'mdtrm_grade' )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) )
			->validator( Validate::numeric() ),
		Field::inst( 'fnl_grade' )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) )
			->validator( Validate::numeric() ),
		Field::inst( 'status' )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) )
			->validator( Validate::values( array('P', 'F','INC','D','W')) )
	)
	->process( $_POST )
	->json();
