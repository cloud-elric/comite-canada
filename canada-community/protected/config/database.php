<?php
$debug = true;
$dataBase = array ();
if ($debug) {
	$dataBase = array (
				
			'connectionString' => 'mysql:host=;dbname=',
			'emulatePrepare' => true,
			'username' => '',
			'password' => '',
			//'charset' => 'utf8',
				
			'schemaCachingDuration'=>3600,
	);
} else {
	$dataBase = array (
				
		'connectionString' => 'mysql:host=;dbname=',
		'emulatePrepare' => true,
		'username' => '',
		'password' => '',
		'charset' => 'utf8',
		'tablePrefix' => 'tbl_',
		
		'schemaCachingDuration'=>3600,
		
	)
	;
}
return $dataBase;
