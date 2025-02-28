<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Repair;
use Illuminate\Http\Request;

class RepairController extends Controller
{
    public function index()
    {
        $repairs = Repair::all();
        return view('admin.repairs.index', compact('repairs'));
    }

    // Implementa los demás métodos (create, store, show, edit, update, destroy) según sea necesario
}

