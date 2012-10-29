<?php

class IndexController
{
	public $name;

	public function __construct()
	{
		$this->name = "ICHI FRAMEWORK 0.1";
	}

	public function IndexAction()
	{
		$this->name = "ICHI FRAMEWORK 0.2";


		return array( "name" =>$this->name);
	}
}