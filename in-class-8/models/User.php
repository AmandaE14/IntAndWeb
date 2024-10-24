<?php

namespace models;

class User {
    public function getAllUsers() {
        return [
            ['id' => 1, 'name' => 'Amy'],
            ['id' => 2, 'name' => 'Isabella'],
            ['id' => 3, 'name' => 'Melissa']
        ];
    }
}