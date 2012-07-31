<?php
require_once "View.php", "Model.php";

class Controller
{
	private:
		$view = new View;

		function GetNewPostModel() { return new PostModel; }
		function GetNewUserModel() { return new UserModel; }

	public:
		function __construct() {}

		function IndexAction() {}

		function NewAction() {}
		function CreateAction() {}

		function DeleteAction() {}

		function EditAction() {}
		function UpdateAction() {}

		function ShowAction() {}

		function __destruct() {}
}

class PostController extends Controller
{
	private:



	public:
		function IndexAction()
		{
			//get a new post model
			//query for all posts
			//display the index of all posts
		}

		function NewAction()
		{
			//display the new post page
		}

		function CreateAction()
		{
			//retrieve form data from POST
			//create new post model
			//add form data as a new entry in the database
		}

		function DeleteAction()
		{
			//display the page allowing selection of a post for deletion
		}

		function EditAction()
		{
			//display a page for the user to edit a post
		}

		function UpdateAction()
		{
			//retrieve form data from POST
			//create new post model
			//update entry with new information
		}

		function ShowAction()
		{
			//create new post model
			//retrieve post details
			//display post details
		}

}

class UserController extends Controller
{
	private:


	public:
		function IndexAction() {}

		function NewAction() {}
		function CreateAction() {}
		function DeleteAction() {}
		function UpdateAction() {}
}

?>