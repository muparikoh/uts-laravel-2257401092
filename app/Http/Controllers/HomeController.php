<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'name' => 'Muparikoh',
            'nim' => '2257401092',
            'class' => 'MI22A',
        ];

        return view('dashboard', $data);
    }
    public function logout()
    {
        auth()->logout();
        return redirect('/home');
    }
}
