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
Editor::inst( $db, 'school_evaluation','school_eval_id' )
	->fields(
		Field::inst( 'school_eval_id' ),
		Field::inst( 'stdnt_appli_id' )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) )
			->options( Options::inst()
    	    ->table( 'student_applicants' )
    	    ->value( 'stdnt_appli_id' ))
    		->validator( Validate::dbValues() ),
		Field::inst( 'evaluator' )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) )
			->options( Options::inst()
    	    ->table( 'person' )
    	    ->value( 'person_id' ))
    		->validator( Validate::dbValues() ),
		Field::inst( 'exam_result' )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) )
			->validator( Validate::numeric() ),
		Field::inst( 'exam_date' )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) )
			->validator( Validate::dateFormat( 'Y-m-d' ) )
				->getFormatter( Format::dateSqlToFormat( 'Y-m-d' ) )
				->setFormatter( Format::dateFormatToSql('Y-m-d' ) ),
		Field::inst( 'evaluation' )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) )
	)
	->process( $_POST )
	->json();
