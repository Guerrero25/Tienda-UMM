<?php
/**
 *
 */
class QueryManager
{
	private $link;

	function __construct($host, $user, $pass, $name)
	{
		$this->link = new mysqli($host, $user, $pass, $name);
		if (mysqli_connect_errno()) {
			printf("Conexion fallida: %s\n", mysqli_connect_error());
			exit();
		}
	}

	function select1($attr, $table, $where){
		$query = "SELECT ".$attr." FROM ".$table." WHERE ".$where.";";
		$result = $this->link->query($query);
		if($result->num_rows>0){
			while ($row = $result->fetch_assoc()) {
				$response[] = $row;
			}
			return $response;
		}
	}

}



 ?>
