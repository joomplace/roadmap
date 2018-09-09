<?php
/**
 * Copyright (c) 2018. JoomPlace, all rights reserved
 */

namespace Joomplace\Component\Roadmap\Admin;

use Joomplace\X\ComponentStarter;

$input = \JFactory::getApplication()->input;

ComponentStarter::startup(Dispatcher::class, $input->get('view', 'Roadmap'),
    __DIR__ . DIRECTORY_SEPARATOR . 'migrations');