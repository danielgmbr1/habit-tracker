<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    public function index()
    {
        $name = 'Joao';
        $habits = ['Ler', 'Correr', 'Estudar', 'Jogar'];

        return view('home', [
            'name' => $name,
            'habits' => $habits,
        ]);
    }
}
