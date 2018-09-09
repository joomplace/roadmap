<?php
/**
 * Copyright (c) 2018. JoomPlace, all rights reserved
 */

namespace Joomplace\Component\Roadmap\Admin\Controller;


use Joomplace\X\Controller;

class Roadmap extends Controller
{
    public function display($cachable = false, $urlparams = array())
    {
        echo "<pre>";
        print_r("Simple display task for Roadmap");
        echo "</pre>";
    }
}