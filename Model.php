<?php
class Model
{
	private:

		static $databaseConnection;

	public:
		
		function ConnectToDatabase() {}
		function DisconnectFromDatabase() {}

		function AddAction() {}
		function RemoveAction() {}
		function UpdateAction() {}
		
}

class UserModel extends Model
{

}

class PostModel extends Model
{

}
?>