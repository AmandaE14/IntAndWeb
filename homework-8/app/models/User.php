<?php

namespace app\models;

class User {
    private $file = 'users.json';

    public function getAllUsersByName($params) {
        $allUsers = $this->getAllUsers();
        
        if (!empty($params['name'])) {
            return array_filter($allUsers, function ($user) use ($params) {
                return stripos($user['name'], $params['name']) !== false;
            });
        }

        return $allUsers;
    }

    public function saveUser($name) {
        $users = $this->getAllUsers();
        $newUser = [
            'id' => count($users) + 1,
            'name' => $name
        ];
        $users[] = $newUser;
        
        file_put_contents($this->file, json_encode($users, JSON_PRETTY_PRINT));
        return $newUser;
    }

    public function getAllUsers() {
        return file_exists($this->file) ? json_decode(file_get_contents($this->file), true) : [];
    }
}