<?php

class UserModel {
    public function getAllUsers() {
        return [
            ['id' => 1, 'name' => 'Emma', 'email' => 'emma@email.com'],
            ['id' => 2, 'name' => 'Tom', 'email' => 'tom@email.com']
        ];
    }
}