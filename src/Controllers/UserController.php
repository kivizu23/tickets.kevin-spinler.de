<?php

namespace Kst\Controllers;

use Kst\Controller;
use Kst\Models\User;

class UserController extends Controller {
    public function index() {
        $users = [
            new User('John Doe', 'john@example.com'),
            new User('Jane Doe', 'jane@example.com')
        ];

        $this->render('User', ['users' => $users]);
    }
}
