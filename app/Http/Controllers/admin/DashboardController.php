<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Repair;
use App\Models\Service;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'services_count' => Service::count(),
            'clients_count' => Client::count(),
            'pending_repairs' => Repair::where('status', 0)->count(),
            'delivered_repairs' => Repair::where('status', 1)->count(),
            'in_progress_repairs' => Repair::where('status', 2)->count(),
            'returned_repairs' => Repair::where('status', 3)->count(),
            'completed_repairs' => Repair::where('status', 4)->count(),
            'cancelled_repairs' => Repair::where('status', 5)->count(),
        ];

        return view('admin.dashboard', $data);
    }
}