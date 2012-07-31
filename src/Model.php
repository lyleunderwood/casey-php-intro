<?php

class Model
{
	private:

		static $databaseConnection;
		static $tableName;

	public:

		function ConnectToDatabase()
		{
			if($databaseConnection)
				return;

			$databaseConnection = mysql_connect("localhost", "root", "root");

			if(!$databaseConnection)
				throw new Exception("Error: Could not connect to database", 1);

			if(!mysql_select_db("userposter"))
			{
				mysql_close($databaseConnection);
				throw new Exception("Error: Could not select database " . "userposter", 1);
			}

		}

		function DisconnectFromDatabase()
		{
			if($databaseConnection)
				mysql_close($databaseConnection);

			$databaseConnection = null;
		}

		function QueryDatabase($queryString)
		{
			ConnectToDatabase();

			$databaseResource = mysql_query($queryString);

			return new QueryIterator($databaseResource);
		}

		//
		function Add($data) {}
		function Remove($ID) {}
		function Update($ID, $data) {}

}

class UserModel extends Model
{
	$tableName = "";
}

class PostModel extends Model
{
	$tableName = "";
}
?>