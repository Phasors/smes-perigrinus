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
Editor::inst( $db, 'acad_docu','acad_docu_id' )
	->fields(
		Field::inst( 'acad_docu_id' ),
		Field::inst( 'stdnt_info_id' )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) )
			->options( Options::inst()
		        ->table( 'stdnt_info' )
		        ->value( 'stdnt_info_id' ))
	  	  	->validator( Validate::dbValues() ),
		Field::inst( 'acad_docu_required_id' )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) )
			->options( Options::inst()
		        ->table( 'acad_docu_required' )
		        ->value( 'acad_docu_required_id' ))
	  	  	->validator( Validate::dbValues() ),
		Field::inst( 'receiver' )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) )
			->options( Options::inst()
		        ->table( 'person' )
		        ->value( 'person_id' ))
	  	  	->validator( Validate::dbValues() ),
		Field::inst( 'date_receive' )
			->validator( Validate::dateFormat( 'Y-m-d' ) )
			->getFormatter( Format::dateSqlToFormat( 'Y-m-d' ) )
			->setFormatter( Format::dateFormatToSql('Y-m-d' ) )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) ),
		Field::inst( 'type' )
			->validator( Validate::numeric() )
			->setFormatter( Format::ifEmpty(null) )
			->validator( Validate::notEmpty( ValidateOptions::inst()
			->message( 'Required' )	) ),
		Field::inst( 'form' )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) ),
		Field::inst( 'status' )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) )
			->validator( Validate::values( array('0','1')) )
	)
	->process( $_POST )
	->json();
