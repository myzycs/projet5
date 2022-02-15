<?php 
namespace ide\model;

class Manager
{	//protected pour que les fonctions filles dans les fichier manager puissent l'appeler
	protected function dbConnect()
	{
	    $version ='db5004839317.hosting-data.io';
        $dbname = 'dbs4058410';
        $charset ='utf8';
        $dsn = 'mysql:host='.$version.';dbname='.$dbname.';charset='.$charset;
        $username = 'dbu2218268';
        $password = '25Cocacola05_';

        $db = new \PDO( $dsn, $username , $password );

        return $db;
	}
}