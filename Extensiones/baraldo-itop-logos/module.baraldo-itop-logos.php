<?php

SetupWebPage::AddModule(
	__FILE__, // Path to the current file, all other file names are relative to the directory containing this file
	'baraldo-itop-logos/1.0.0',
	array(
		// Identification
		//
		'label' => 'Custom iTop logos - Baraldo Argentina',
		'category' => 'application',

		// Setup
		//
		'dependencies' => array(
			'combodo-backoffice-darkmoon-theme/3.0.0',
			'itop-structure/3.0.0',
			'itop-portal-base/1.0.0'
		),
		'mandatory' => false,
		'visible' => true,

		// Components
		//
		'datamodel' => array(
		),
		'webservice' => array(
			
		),
		'data.struct' => array(
			// add your 'structure' definition XML files here,
		),
		'data.sample' => array(
			// add your sample data XML files here,
		),
		
		// Documentation
		//
		'doc.manual_setup' => '', // hyperlink to manual setup documentation, if any
		'doc.more_information' => '', // hyperlink to more information, if any 

		// Default settings
		//
		'settings' => array(
		),
	)
);
