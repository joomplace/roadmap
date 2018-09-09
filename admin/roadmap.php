<?php
/**
 * Copyright (c) 2018. JoomPlace, all rights reserved
 */

namespace Joomplace\Component\Roadmap\Admin;

use Joomplace\X\ComponentStarter;

ComponentStarter::startup(Dispatcher::class, 'Roadmap', __DIR__ . DIRECTORY_SEPARATOR . 'migrations');