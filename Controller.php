<?php
require_once "View.php", "Model.php";

class Controller
{
	private:
		$view = new View;

	public:
		function __construct();

		function IndexAction() {}

		function AddAction() {}
		function DeleteAction() {}
		function UpdateAction() {}

		function __destruct();
}

class PostController extends Controller
{
	private:

	public:

}

class UserController extends Controller
{
	private:

	public:
}

?>