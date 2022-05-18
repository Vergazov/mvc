<?php

use model\Model;
use view\View;
use controller\Controller;

require_once 'vendor/autoload.php';

$model = new Model();
$controller = new Controller($model);
$view = new View($controller, $model);

echo $view->output();



