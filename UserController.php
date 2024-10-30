<?php

namespace controllers;
use models\User;

class UserController {
    public function index() {
        $userModel = new User();
        var_dump($userModel->getAllUsers()); 
    }
}