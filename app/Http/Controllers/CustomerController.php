<?php

namespace App\Http\Controllers;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = [
            ['id' => 1, 'name' => 'Maria Santos',   'email' => 'maria@example.com',  'phone' => '0917-111-1111'],
            ['id' => 2, 'name' => 'Juan Dela Cruz', 'email' => 'juan@example.com',   'phone' => '0917-222-2222'],
            ['id' => 3, 'name' => 'Ana Reyes',      'email' => 'ana@example.com',    'phone' => '0917-333-3333'],
            ['id' => 4, 'name' => 'Pedro Garcia',   'email' => 'pedro@example.com',  'phone' => '0917-444-4444'],
            ['id' => 5, 'name' => 'Liza Mendoza',   'email' => 'liza@example.com',   'phone' => '0917-555-5555'],
        ];

        return view('customers', ['customers' => $customers]);
    }
}