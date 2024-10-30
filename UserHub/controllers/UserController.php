<?php

require_once __DIR__ . '/../models/UserModel.php';

class UserController {
    public function serveHtml() {
        include __DIR__ . '/../views/user.html';
    }

    public function serveJson() {
        $userModel = new UserModel();
        header('Content-Type: application/json');
        echo json_encode($userModel->getAllUsers());
    }        
}