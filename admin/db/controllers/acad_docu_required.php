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
Editor::inst( $db, 'acad_docu_required','acad_docu_required_id' )
	->fields(
		Field::inst( 'acad_docu_required_id' ),
		Field::inst( 'docu_name' )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) ),
		Field::inst( 'docu_info' )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) ),
		Field::inst( 'required_for' )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) )
			->validator( Validate::numeric() )
			->setFormatter( Format::ifEmpty(null) )
	)
	->process( $_POST )
	->json();
