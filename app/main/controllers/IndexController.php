<?php

use ICHI\IF_CONTROLLER;

class IndexController extends IF_CONTROLLER
{

    public function IndexAction()
    {
        $name = "ICHI FRAMEWORK 0.2";
        $this->passToLayout(array( 'title' =>'Ichi Framework'));
        return array( "name" =>$name);
    }

    public function AboutAction()
    {
        $name = "<em>Ichi Framework</em> V.0.1";

        return array( "name" =>$name);
    }
}