<?php
namespace Application\Lib\Database;


class DatabaseConnection
{
	public ?\PDO $database = null;

	public function getConnection(): \PDO
	{
    	if ($this->database === null) {
        	$this->database = new \PDO('mysql:host=localhost;dbname=oc-blog;charset=utf8', 'oc-blog', 'password');
    	}

    	return $this->database;
	}
}