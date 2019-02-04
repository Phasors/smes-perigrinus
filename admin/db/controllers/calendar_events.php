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
Editor::inst( $db, 'calendar_events','calendar_event_id' )
	->fields(
		Field::inst( 'calendar_event_id' ),
		Field::inst( 'title' )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) ),
		Field::inst( 'content' )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) ),
		Field::inst( 'date_start' )
			->validator( Validate::dateFormat( 'Y-m-d H:i:s' ) )
				->getFormatter( Format::dateSqlToFormat( 'Y-m-d H:i:s' ) )
				->setFormatter( Format::dateFormatToSql('Y-m-d H:i:s' ) )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) ),
		Field::inst( 'date_end' )
			->validator( Validate::dateFormat( 'Y-m-d H:i:s' ) )
				->getFormatter( Format::dateSqlToFormat( 'Y-m-d H:i:s' ) )
				->setFormatter( Format::dateFormatToSql('Y-m-d H:i:s' ) )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) ),
		Field::inst( 'creator' )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) )
	)
	->process( $_POST )
	->json();
