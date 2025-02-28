<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Muestra la página de inicio
     */
    public function index(): View
    {
        return view('pages.home');
    }
    
    /**
     * Muestra la página Acerca de
     */
    public function about(): View
    {
        return view('pages.about');
    }
    
    /**
     * Muestra la página de contacto
     */
    public function contact(): View
    {
        return view('pages.contact');
    }
    
    /**
     * Muestra la página de verificación de estado
     */
    public function checkStatus(): View
    {
        return view('pages.check-status');
    }
    
    /**
     * Muestra el dashboard del usuario autenticado
     */
    public function dashboard(): View
    {
        return view('pages.dashboard');
    }
}