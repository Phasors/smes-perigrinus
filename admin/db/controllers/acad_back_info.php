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
Editor::inst( $db, 'acad_back_info','acad_back_info_id' )
	->fields(
		Field::inst( 'acad_back_info_id' ),
		Field::inst( 'person_id' )
			->validator( Validate::notEmpty( ValidateOptions::inst()
					->message( 'Required' )	) )
			->options( Options::inst()
		        ->table( 'person' )
		        ->value( 'person_id' ))
		    ->validator( Validate::dbValues() ),
		Field::inst( 'prmry_school' )
			->validator( Validate::notEmpty( ValidateOptions::inst()
					->message( 'Required' )	) ),
		Field::inst( 'prmry_school_add' )
			->validator( Validate::notEmpty( ValidateOptions::inst()
					->message( 'Required' )	) ),
		Field::inst( 'ps_sy_start' )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) )
			->validator( Validate::dateFormat( 'Y-m-d' ) )
				->getFormatter( Format::dateSqlToFormat( 'Y-m-d' ) )
				->setFormatter( Format::dateFormatToSql('Y-m-d' ) ),
		Field::inst( 'ps_sy_end' )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) )
			->validator( Validate::dateFormat( 'Y-m-d' ) )
				->getFormatter( Format::dateSqlToFormat( 'Y-m-d' ) )
				->setFormatter( Format::dateFormatToSql('Y-m-d' ) ),
		Field::inst( 'scndry_school' )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) ),
		Field::inst( 'scndry_school_add' )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) ),
		Field::inst( 'ss_sy_start' )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) )
			->validator( Validate::dateFormat( 'Y-m-d' ) )
				->getFormatter( Format::dateSqlToFormat( 'Y-m-d' ) )
				->setFormatter( Format::dateFormatToSql('Y-m-d' ) ),
		Field::inst( 'ss_sy_end' )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) )
			->validator( Validate::dateFormat( 'Y-m-d' ) )
				->getFormatter( Format::dateSqlToFormat( 'Y-m-d' ) )
				->setFormatter( Format::dateFormatToSql('Y-m-d' ) ),
		Field::inst( 'scndry_school_2' )
			->setFormatter( Format::ifEmpty(null) ),
		Field::inst( 'scndry_school_2_add' )
			->setFormatter( Format::ifEmpty(null) ),
		Field::inst( 'ss2_sy_start' )
			->validator( Validate::dateFormat( 'Y-m-d' ) )
				->getFormatter( Format::dateSqlToFormat( 'Y-m-d' ) )
				->setFormatter( Format::dateFormatToSql('Y-m-d' ) )
				->setFormatter( Format::ifEmpty(null) ),
		Field::inst( 'ss2_sy_end' )
			->validator( Validate::dateFormat( 'Y-m-d' ) )
				->getFormatter( Format::dateSqlToFormat( 'Y-m-d' ) )
				->setFormatter( Format::dateFormatToSql('Y-m-d' ) )
				->setFormatter( Format::ifEmpty(null) ),
		Field::inst( 'trtry_school' )
			->setFormatter( Format::ifEmpty(null) ),
		Field::inst( 'trtry_school_add' )
			->setFormatter( Format::ifEmpty(null) ),
		Field::inst( 'ts_sy_start' )
			->validator( Validate::dateFormat( 'Y-m-d' ) )
				->getFormatter( Format::dateSqlToFormat( 'Y-m-d' ) )
				->setFormatter( Format::dateFormatToSql('Y-m-d' ) )
				->setFormatter( Format::ifEmpty(null) ),
		Field::inst( 'ts_sy_end' )
			->validator( Validate::dateFormat( 'Y-m-d' ) )
				->getFormatter( Format::dateSqlToFormat( 'Y-m-d' ) )
				->setFormatter( Format::dateFormatToSql('Y-m-d' ) )
				->setFormatter( Format::ifEmpty(null) )
	)
	->process( $_POST )
	->json();
