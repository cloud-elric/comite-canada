<?php
$debug = true;
$dataBase = array ();
if ($debug) {
	$dataBase = array (
			
			'connectionString' => 'mysql:host=localhost;dbname=comite_canada',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => 'root',
			//'charset' => 'utf8', 
			
			'schemaCachingDuration'=>3600,
	);
} else {
	$dataBase = array (
			
// 			'connectionString' => 'sqlite:' . dirname ( __FILE__ ) . '/../data/testdrive.db',
// 			'connectionString' => 'mysql:host=mysql1003.mochahost.com;dbname=beto2gom_comiteFoto2016',
// 			'emulatePrepare' => true,
// 			'username' => 'beto2gom_c0m1teF',
// 			'password' => '2PMOq[aWdmF6',
// 			'charset' => 'utf8',
// 			'tablePrefix' => 'tbl_'
			
		'connectionString' => 'mysql:host=localhost;dbname=globalju_hazclic',
		'emulatePrepare' => true,
		'username' => 'globalju_GeekDeveloper',
		'password' => 'c0d1ngG33k',
		'charset' => 'utf8',
		'tablePrefix' => 'tbl_',
		
		'schemaCachingDuration'=>3600,

// 			'connectionString' => 'mysql:host=us-cdbr-azure-central-a.cloudapp.net;dbname=dgom_photo_contest',
// 			'emulatePrepare' => true,
// 			'username' => 'b95d0e7251d5d6',
// 			'password' => '5c4c54e7',
// 			'charset' => 'utf8',
// 			'tablePrefix' => 'tbl_' 
	);
}
return $dataBase;