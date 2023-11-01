<?php

// Copyright (C) 2017-2018 Molkobain
//
//   This file is part of the iTop extension molkobain-portal-rm-mosaic-service-catalog.

SetupWebPage::AddModule(
	__FILE__, // Path to the current file, all other file names are relative to the directory containing this file
	'molkobain-portal-mosaic-service-catalog/1.0.0', array(
	// Identification
	'label' => 'Portal: Service catalog as mosaic by default',
		'category' => 'Portal',
	// Setup
	'dependencies' => array(
	    'itop-portal/2.4.0',
	),
	'mandatory' => false,
	'visible' => true,
	// Components
	'datamodel' => array(
	),
	'webservice' => array(
	//'webservices.itop-portal-base.php',
	),
	'dictionary' => array(
	//'en.dict.itop-portal-base.php',
	),
	'data.struct' => array(
	//'data.struct.itop-portal-base.xml',
	),
	'data.sample' => array(
	//'data.sample.itop-portal-base.xml',
	),
	// Documentation
	'doc.manual_setup' => '',
	'doc.more_information' => '',
	// Default settings
	'settings' => array(
	),
	)
);
