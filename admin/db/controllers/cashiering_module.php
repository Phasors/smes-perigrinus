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
Editor::inst( $db, 'cashiering_module','transact_no' )
	->fields(
		Field::inst( 'transact_no' ),
		Field::inst( 'person_id' )
			->options( Options::inst()
    	    ->table( 'person' )
    	    ->value( 'person_id' ))
    		->validator( Validate::dbValues() )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) ),
		Field::inst( 'curriculum_id' )
			->options( Options::inst()
    	    ->table( 'curriculum' )
    	    ->value( 'curriculum_id' ))
    		->validator( Validate::dbValues() )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) ),
		Field::inst( 'program_id' )
			->options( Options::inst()
    	    ->table( 'program' )
    	    ->value( 'program_id' ))
    		->validator( Validate::dbValues() )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) ),
		Field::inst( 'semester' )
			->validator( Validate::numeric() )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) ),
		Field::inst( 'official_receipt_no' )
			->validator( Validate::numeric() )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) ),
		Field::inst( 'official_receipt_date' )
			->validator( Validate::dateFormat( 'Y-m-d' ) )
				->getFormatter( Format::dateSqlToFormat( 'Y-m-d' ) )
				->setFormatter( Format::dateFormatToSql('Y-m-d' ) )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) ),
		Field::inst( 'amount_paid' )
			->validator( Validate::numeric() )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) ),
		Field::inst( 'course_id' )
			->validator( Validate::numeric() )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) )
	)
	->process( $_POST )
	->json();
