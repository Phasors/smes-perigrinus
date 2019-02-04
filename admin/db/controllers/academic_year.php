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
Editor::inst( $db, 'academic_year','ay_id' )
->fields(
	Field::inst( 'ay_id' ),
	Field::inst( 'ay_desc' )
		->validator( Validate::notEmpty( ValidateOptions::inst()
			->message( 'Required' )	) ),
	Field::inst( 'ay_start' )
		->validator( Validate::numeric() )
		->validator( Validate::notEmpty( ValidateOptions::inst()
			->message( 'Required' )	) ),
	Field::inst( 'ay_end' )
		->validator( Validate::numeric() )
		->validator( Validate::notEmpty( ValidateOptions::inst()
			->message( 'Required' )	
		) ),
	Field::inst( 'status' )
		->validator( Validate::numeric() )
		->setFormatter( Format::ifEmpty(0) )
)
->process( $_POST )
->json();
