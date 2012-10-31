<?php

class IndexController extends IF_CONTROLLER
{
	public $name;

	public function __construct()
	{
		$this->name = "ICHI FRAMEWORK 0.1";
	}

	public function IndexAction()
	{
		$this->name = "ICHI FRAMEWORK 0.2";
// 		$this->setLayout('layout.phtml');
// 		$this->noLayout();
		return array( "name" =>$this->name);
	}
}