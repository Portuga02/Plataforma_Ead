<?php
class model
{

	protected $db;

	public function __construct()
	{
		try {
			global $config;
			$db = $this->db = new PDO("mysql:dbname=" . $config['dbname'] . ";host=" . $config['host'], $config['dbuser'], $config['dbpass']);
			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch (PDOException $th) {
			echo "error" . $th->getMessage();
		}
	}
}
