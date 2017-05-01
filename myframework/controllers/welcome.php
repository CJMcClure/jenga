<?php
class welcome extends AppController
{
	public function __construct()
	{
		//database connection
		//global header, js files
		//models
	}

	public function index()
	{
		$this->getView("header",array("pagename"=>"home", "title"=>"Navbar Template"));
		$this->getView("header");
		$this->getView("navigation", array("Home", "Example","Contact","List"));
		$this->getView("welcome");
		$this->getView("footer");
	}

	public function login()
	{
		if($_POST['email'] == "me@myself.com" && $_POST['password'] == "password")
		{
			echo json_encode(array('data' => 'success'));
		}
		else
		{
			echo json_encode(array('data' => 'failure'));
		}
	}

	public function contact()
	{
		header("location:/contact");
	}
}
?>
