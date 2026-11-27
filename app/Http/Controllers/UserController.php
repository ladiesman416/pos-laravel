<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            ['id' => 1, 'name' => 'Admin One',     'email' => 'admin@example.com',   'role' => 'Admin'],
            ['id' => 2, 'name' => 'Cashier Two',   'email' => 'cashier1@example.com', 'role' => 'Cashier'],
            ['id' => 3, 'name' => 'Cashier Three', 'email' => 'cashier2@example.com', 'role' => 'Cashier'],
            ['id' => 4, 'name' => 'Manager Four',  'email' => 'manager@example.com',  'role' => 'Manager'],
            ['id' => 5, 'name' => 'Staff Five',    'email' => 'staff@example.com',    'role' => 'Staff'],
        ];

        return view('users', ['users' => $users]);
    }
}