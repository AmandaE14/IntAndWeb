<?php

namespace app\controllers;

use Exception;

class ErrorController {
    public function viewErrors() {
        try {
            if (true) {
                throw new Exception('Custom error message!');
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}

$errorController = new ErrorController();
$errorController->viewErrors();