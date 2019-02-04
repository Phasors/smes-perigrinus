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
Editor::inst( $db, 'notifications','notification_id' )
	->fields(
		Field::inst( 'sender' )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) )
			->options( Options::inst()
    	    ->table( 'person' )
    	    ->value( 'person_id' ))
    		->validator( Validate::dbValues() ),
		Field::inst( 'receiver' )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) )
			->options( Options::inst()
    	    ->table( 'person' )
    	    ->value( 'person_id' ))
    		->validator( Validate::dbValues() ),
		Field::inst( 'header' )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) ),
		Field::inst( 'body' )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) ),
		Field::inst( 'attachment' )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) ),
		Field::inst( 'link' )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) ),
		Field::inst( 'status' )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) )
			->validator( Validate::numeric() )
	)
	->process( $_POST )
	->json();
