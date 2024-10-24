<?php

use controllers\UserController;

require_once 'models/User.php';
require_once 'controllers/UserController.php';

$controller = new UserController();
$controller->index();