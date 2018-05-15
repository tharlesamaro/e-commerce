<?php

/**
 * Created by PhpStorm.
 * User: tharles
 * Date: 14/05/18
 * Time: 16:00
 */

Class Template extends Smarty
{
    function __construct()
    {
        parent::__construct();

        $this->setTemplateDir('view/');
        $this->setCompileDir('view/compile/');
        $this->setCacheDir('view/cache');
    }
}
