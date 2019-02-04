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
Editor::inst( $db, 'person','person_id' )
	->fields(
		Field::inst( 'person_id' ),
		Field::inst( 'fname' )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) ),
		Field::inst( 'mname' )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) ),
		Field::inst( 'lname' )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) ),
		Field::inst( 'birthdate' )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) )
			->validator( Validate::dateFormat( 'Y-m-d' ) )
			->getFormatter( Format::dateSqlToFormat( 'Y-m-d' ) )
			->setFormatter( Format::dateFormatToSql('Y-m-d' ) ),
		Field::inst( 'contact_no' )
				->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) )
			->validator( Validate::numeric() ),
		Field::inst( 'civil_status' )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) ),
		Field::inst( 'email' )
			->validator( Validate::email( ValidateOptions::inst()
				->message( 'Required' )	) ),
		Field::inst( 'sex' )
			->validator( Validate::email( ValidateOptions::inst()
				->message( 'Required' )	) ),
		Field::inst( 'res_house_no' ),
		Field::inst( 'res_strt_name' ),
		Field::inst( 'res_barangay' ),
		Field::inst( 'res_prov_id' )
			->options( Options::inst()
    	    ->table( 'province' )
    	    ->value( 'prov_id' ))
    		->validator( Validate::dbValues() ),
		Field::inst( 'res_town_id' )
			->options( Options::inst()
    	    ->table( 'town' )
    	    ->value( 'town_id' ))
    		->validator( Validate::dbValues() ),
		Field::inst( 'res_reg_id' )
			->options( Options::inst()
    	    ->table( 'region' )
    	    ->value( 'reg_id' ))
    		->validator( Validate::dbValues() ),
		Field::inst( 'perm_house_no' )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) ),
		Field::inst( 'perm_strt_name' )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) ),
		Field::inst( 'perm_barangay' )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) ),
		Field::inst( 'perm_prov_id' )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) )
			->options( Options::inst()
    	    ->table( 'province' )
    	    ->value( 'prov_id' ))
    		->validator( Validate::dbValues() ),
		Field::inst( 'perm_town_id' )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) )
			->options( Options::inst()
    	    ->table( 'town' )
    	    ->value( 'town_id' ))
    		->validator( Validate::dbValues() ),
		Field::inst( 'perm_reg_id' )
			->validator( Validate::notEmpty( ValidateOptions::inst()
				->message( 'Required' )	) )
			->options( Options::inst()
    	    ->table( 'region' )
    	    ->value( 'reg_id' ))
    		->validator( Validate::dbValues() )
	)
	->process( $_POST )
	->json();
