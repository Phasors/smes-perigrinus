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
Editor::inst( $db, 'course_schedules','course_schedule_id' )
	->fields(
		Field::inst( 'course_schedule_id' ),
		Field::inst( 'curriculum_id' )
			->options( Options::inst()
    	    ->table( 'curriculum' )
    	    ->value( 'curriculum_id' ))
    		->validator( Validate::dbValues() )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) ),
		Field::inst( 'course_id' )
			->options( Options::inst()
    	    ->table( 'courses' )
    	    ->value( 'course_id' ))
    		->validator( Validate::dbValues() )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) ),
		Field::inst( 'block_id' )
			->options( Options::inst()
    	    ->table( 'block' )
    	    ->value( 'block_id' ))
    		->validator( Validate::dbValues() )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) ),
		Field::inst( 'day' )
			->validator( Validate::numeric() )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) ),
		Field::inst( 'time_start' )
			->validator( Validate::dateFormat( 'H:i:s' ) )
				->getFormatter( Format::dateSqlToFormat( 'H:i:s' ) )
				->setFormatter( Format::dateFormatToSql('H:i:s' ) )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) ),
		Field::inst( 'time_end' )
			->validator( Validate::dateFormat( 'H:i:s' ) )
				->getFormatter( Format::dateSqlToFormat( 'H:i:s' ) )
				->setFormatter( Format::dateFormatToSql('H:i:s' ) )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) ),
		Field::inst( 'room' )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) ),
		Field::inst( 'category' )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) )
	)
	->process( $_POST )
	->json();
