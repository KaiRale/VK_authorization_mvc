<?php
require_once __DIR__.'/../src/Controllers/IndexController.php';
require_once __DIR__.'/../src/Controllers/VkController.php';
require_once __DIR__.'/../src/Controllers/LogoutController.php';
require_once  __DIR__.'/../src/Core/Router.php';
Router::run();
