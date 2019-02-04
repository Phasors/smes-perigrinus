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
Editor::inst( $db, 'faculty_messages','faculty_message_id' )
	->fields(
		Field::inst( 'faculty_message_id' ),
		Field::inst( 'faculty_id' )
			->options( Options::inst()
    	    ->table( 'faculty' )
    	    ->value( 'faculty_id' ))
    		->validator( Validate::dbValues() )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) ),
		Field::inst( 'sender' )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) ),
		Field::inst( 'receiver' )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) ),
		Field::inst( 'content' )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) ),
		Field::inst( 'time' )
			->validator( Validate::dateFormat( 'Y-m-d H:i:s' ) )
				->getFormatter( Format::dateSqlToFormat( 'Y-m-d H:i:s' ) )
				->setFormatter( Format::dateFormatToSql('Y-m-d H:i:s' ) )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) ),
		Field::inst( 'attachment' )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) ),
		Field::inst( 'deleted' )
			->setFormatter( Format::ifEmpty(0) )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) )
	)
	->process( $_POST )
	->json();
