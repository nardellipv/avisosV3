<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $topVisits = Service::with(['region'])
            ->orderBy('visit', 'desc')
            ->limit(6)
            ->get();

        $lastServices = Service::with(['region'])
            ->orderBy('created_at', 'desc')
            ->limit(12)
            ->get();

        return view('web.index', compact('topVisits', 'lastServices'));
    }
}
