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
Editor::inst( $db, 'student_messages','stdnt_message_id' )
	->fields(
		Field::inst( 'stdnt_message_id' ),
		Field::inst( 'stdnt_info_id' )
			->options( Options::inst()
    	    ->table( 'stdnt_info' )
    	    ->value( 'stdnt_info_id' ))
    		->validator( Validate::dbValues() ),
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
				->setFormatter( Format::dateFormatToSql('Y-m-d H:i:s' ) ),
		Field::inst( 'attachment' ),
		Field::inst( 'deleted' )
	)
	->process( $_POST )
	->json();
