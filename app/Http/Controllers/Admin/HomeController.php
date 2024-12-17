<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:acceso dashboard');
    }

    public function index(){
        return redirect()->route('filament.pages.dashboard'); // Redirige al dashboard de Filament
    }

}
