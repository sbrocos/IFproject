<?php

use ICHI\IF_CONTROLLER;

class IndexController extends IF_CONTROLLER
{
    public $name;

    public function __construct()
    {
        $this->name = "<em>Ichi Framework</em> V.0.1";
    }

    public function IndexAction()
    {
        $this->name = "ICHI FRAMEWORK 0.2";
        return array( "name" =>$this->name);
    }

    public function AboutAction()
    {
        $name = "<em>Ichi Framework</em> V.0.1";

        return array( "name" =>$name);
    }
}